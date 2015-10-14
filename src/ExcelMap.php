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
class ExcelMap implements Map {
	
	/**
	 * 
	 * @var string
	 */
	protected $creator;
	
	/**
	 * 
	 * @var string
	 */
	protected $title;
	
	/**
	 * 
	 * @var array[ExcelSheet]
	 */
	protected $sheets;
	
	
	/**
	 * 
	 */
	public function __construct() {
		$this->sheets = array();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \scipper\Datatransfer\Map::addMappingBase()
	 */
	public function addMappingBase(array $data) {
		throw new MappingException("not implemented yet.");
	}

	/**
	 * (non-PHPdoc)
	 * @see \scipper\Datatransfer\Map::addContent()
	 */
	public function addContent(array $data) {
		throw new MappingException("not implemented yet.");
	}

	/**
	 * (non-PHPdoc)
	 * @see \scipper\Datatransfer\Map::map()
	 */
	public function map() {
		throw new MappingException("not implemented yet.");
	}
	
	/**
	 * 
	 * @param string $data
	 */
	public function setCreator($data) {
		$this->creator = (string) $data;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCreator() {
		return (string) $this->creator;
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
	 * @param mixed $data
	 */
	public function addSheet(ExcelSheet $data) {
		$this->sheets[$data->getUid()] = $data;
	}
	
	/**
	 * 
	 * @param array $data
	 */
	public function setSheets(array $data) {
		$this->sheets = $data;
	}
	
	/**
	 * 
	 * @param unknown $index
	 * @return multitype:\scipper\Datatransfer\ExcelSheet |boolean
	 */
	public function getSheetByIndex($index) {
		if(array_key_exists($index, $this->sheets)) {
			return $this->sheets[$index];
		}
		
		return false;
	}

	/**
	 * 
	 * @return multitype:\scipper\Datatransfer\ExcelSheet
	 */
	public function getSheets() {
		return $this->sheets;
	}
	
}

?>