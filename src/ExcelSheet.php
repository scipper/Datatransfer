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
class ExcelSheet {
	
	/**
	 * 
	 * @var string
	 */
	protected $uid;
	
	/**
	 * 
	 * @var string
	 */
	protected $title;
	
	/**
	 * 
	 * @var array[ExcelCell]
	 */
	protected $cells;
	
	
	/**
	 * 
	 */
	public function __construct() {
		$this->uid = uniqid();
		$this->cells = array();
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getUid() {
		return $this->uid;
	}
	
	/**
	 * 
	 * @param string $data
	 */
	public function setTitle($data) {
		$this->title = (string) $data;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getTitle() {
		return (string) $this->title;
	}
	
	/**
	 * 
	 * @param ExcelCell $data
	 */
	public function addCell(ExcelCell $data) {
		$this->cells[$data->getCoord()] = $data;
	}
	
	/**
	 * 
	 * @param array[ExcelCell] $data
	 */
	public function setCells(array $data) {
		$this->cells = $data;
	}
	
	/**
	 * 
	 * @param unknown $index
	 * @return multitype:\scipper\Datatransfer\ExcelCell |boolean
	 */
	public function getCellByIndex($index) {
		if(array_key_exists($index, $this->cells)) {
			return $this->cells[$index];
		}
		
		return false;
	}
	
	/**
	 * 
	 * @return multitype:\scipper\Datatransfer\ExcelCell
	 */
	public function getCells() {
		return $this->cells;
	}
	
}

?>