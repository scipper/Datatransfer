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
interface Map {

	/**
	 * 
	 * @param array $data
	 * @throws MappingException
	 */
	public function addMappingBase(array $data);
	
	/**
	 * 
	 * @param array $data
	 * @throws MappingException
	 */
	public function addContent(array $data);
	
	/**
	 * 
	 * @throws MappingException
	 */
	public function map();
	
}

?>