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
	 * @var boolean
	 */
	protected $protected;
	
	
	/**
	 * 
	 * @param string $x
	 * @param integer $y
	 * @param mixed $value
	 */
	public function __construct($x, $y, $value = NULL, $protection = false) {
		$this->x = (string) $x;
		$this->y = (integer) $y;
		$this->value = $value;
		$this->protected = $protection;
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
	
	/**
	 * 
	 * @param boolean $protection
	 */
	public function setProtection($protection) {
		$this->protected = (boolean) $protection;
	}
	
	/**
	 * 
	 * @return boolean
	 */
	public function isProtected() {
		return (boolean) $this->protected;
	}
	
}

?>