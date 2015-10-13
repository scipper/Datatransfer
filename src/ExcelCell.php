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
class ExcelCell {
	
	/**
	 * 
	 * @var string
	 */
	protected $x;
	
	/**
	 * 
	 * @var integer
	 */
	protected $y;
	
	/**
	 * 
	 * @var mixed
	 */
	protected $value;
	
	
	/**
	 * 
	 * @param string $x
	 * @param integer $y
	 * @param mixed $value
	 */
	public function __construct($x, $y, $value = NULL) {
		$this->x = (string) $x;
		$this->y = (integer) $y;
		$this->value = $value;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCoord() {
		return $this->x . $this->y;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getX() {
		return (string) $this->x;
	}
	
	/**
	 * 
	 * @param mixed $value
	 */
	public function setValue($value) {
		$this->value = $value;
	}
	
	/**
	 * 
	 * @return mixed
	 */
	public function getValue() {
		return $this->value;
	}
	
}

?>