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
	 * (non-PHPdoc)
	 * @see \scipper\Datatransfer\TransferService::generateEmptyDocument()
	 */
	public function generateEmptyDocument(Map $map) {
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
				$active->setCellValue($cell->getCoord(), $cell->getValue());
				$active->protectCells($cell->getCoord(), "123");
				$active->setSharedStyle($protectedStyle, $cell->getCoord());
				
				$lastOffset = $cell->getX();
			}
			
			$active->getProtection()->setSheet(true);
			
			$active->getStyle("A3:" . $lastOffset . "25")->getProtection()->setLocked(
				\PHPExcel_Style_Protection::PROTECTION_UNPROTECTED
			);
			
			$i++;
		}
		
		$excel->setActiveSheetIndex(0);
		$writer = \PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$writer->save(USERDATA_ROOT . $excel->getProperties()->getTitle() . ".xlsx");
			
// 		$objPHPExcel->getActiveSheet()
// 			
		
		
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \scipper\Datatransfer\TransferService::generateDocument()
	 */
	public function generateDocument(Map $map, array $data) {
		throw new GenerationException("not implemented yet.");
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