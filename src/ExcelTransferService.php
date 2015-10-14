<?php

namespace scipper\Datatransfer;

/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 13.10.2015
 * @namespace scipper\Datatransfer
 * @package scipper\Datatransfer
 *
 */
class ExcelTransferService implements TransferService {
	
	/**
	 * 
	 * @var string
	 */
	protected $documentRoot;
	
	
	/**
	 * 
	 * @param string $documentRoot
	 */
	public function __construct($documentRoot) {
		$this->documentRoot = (string) $documentRoot;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \scipper\Datatransfer\TransferService::generateEmptyDocument()
	 */
	public function generateDocument(Map $map) {
		$excel = new \PHPExcel();
		$excel->removeSheetByIndex(0);
		
		$excel->getProperties()->setCreator($map->getCreator());
		$excel->getProperties()->setTitle($map->getTitle());
		
		$protectedStyle = new \PHPExcel_Style();
		$protectedStyle->applyFromArray(array(
			"fill" 	=> array(
				"type"		=> \PHPExcel_Style_Fill::FILL_SOLID,
				"color"		=> array("argb" => "55CCCCCC")
			), "borders" => array(
				"bottom"	=> array("style" => \PHPExcel_Style_Border::BORDER_THIN),
				"right"		=> array("style" => \PHPExcel_Style_Border::BORDER_MEDIUM)
			)
		));
		
		$i = 0;
		foreach($map->getSheets() as $sheet) {
			$active = $excel->addSheet(new \PHPExcel_Worksheet(NULL, $sheet->getTitle()), $i);
			
			$lastOffset = "A";
			foreach($sheet->getCells() as $cell) {
				//Convert content to list format ist necessary
				if($cell->getType() == "select") {
					$dataValidation = $active->getCell($cell->getCoord())->getDataValidation();
					$dataValidation->setType(\PHPExcel_Cell_DataValidation::TYPE_LIST);
					$dataValidation->setAllowBlank(false);
					$dataValidation->setShowInputMessage(true);
					$dataValidation->setShowDropDown(true);
					$dataValidation->setFormula1($cell->getContent());
				} else {
					$active->setCellValue($cell->getCoord(), $cell->getValue())->getDataValidation();
				}
				
				//Add protection is necessary
				if($cell->isProtected()) {
					$active->protectCells($cell->getCoord(), "123");
					$active->setSharedStyle($protectedStyle, $cell->getCoord());
				} elseif(!$cell->isProtected() && $active->getProtection()->isProtectionEnabled()) {
					$active->unprotectCells($cell->getCoord());
				}
				$active->getColumnDimension($cell->getX())->setAutoSize(true);
				
				$lastOffset = $cell->getX();
			}

// 			$active->getProtection()->setSheet(true);
// 			$active->getStyle("A3:" . $lastOffset . "25")->getProtection()->setLocked(
// 				\PHPExcel_Style_Protection::PROTECTION_UNPROTECTED
// 			);
			
			$i++;
		}
		
		$excel->setActiveSheetIndex(0);
		$writer = \PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$filename = $this->documentRoot . $excel->getProperties()->getTitle() . ".xlsx";
		$writer->save($filename);
		
		return $filename;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \scipper\Datatransfer\TransferService::import()
	 */
	public function import($filename) {
		throw new ImportException("not implemented yet.");
	}
	
}

?>