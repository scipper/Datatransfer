<?php

namespace scipper\Datatransfer;

/**
 * 
 * @author Steffen Kowalski <sk@traiwi.de>
 *
 * @since 05.10.2015
 * @namespace scipper\Datatransfer
 * @package scipper\Datatransfer
 *
 */
interface TransferService {
	
	/**
	 * 
	 * @param Map $map
	 * @param array $data
	 * @return string
	 * @throws GenerationException
	 */
	public function generateDocument(Map $map);
	
	/**
	 * 
	 * @param string $filename
	 * @return boolean
	 * @throws ImportException
	 */
	public function import($filename);	
	
}

?>