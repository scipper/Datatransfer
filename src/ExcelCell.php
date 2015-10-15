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
	 * @var string
	 */
	protected $type;
	
	/**
	 * 
	 * @var string
	 */
	protected $content;
	
	/**
	 * 
	 * @var boolean
	 */
	protected $visibility;
	
	
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
		$this->type = "text";
		$this->visibility = true;
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
	 * @return integer
	 */
	public function getY() {
		return (integer) $this->y;
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
	
	/**
	 * 
	 * @param string $data
	 */
	public function setType($data) {
		$this->type = (string) $data;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getType() {
		return (string) $this->type;
	}
	
	/**
	 * 
	 * @param string $data
	 */
	public function setContent($data) {
		$this->content = (string) $data;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getContent() {
		return (string) $this->content;
	}
	
	/**
	 * 
	 * @param boolean $data
	 */
	public function setVisibility($data) {
		$this->visibility = (boolean) $data;
	}
	
	/**
	 * 
	 * @return boolean
	 */
	public function isVisible() {
		return (boolean) $this->visibility;
	}
	
}

?>