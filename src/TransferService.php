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
	 * @param IncomingData $data
	 * @return NULL|Map
	 * @throws GenerationException
	 */
	public function generateMap(IncomingData $data);
	
	/**
	 * 
	 * @param Map $map
	 * @throws GenerationException
	 */
	public function generateEmptyDocument(Map $map);
	
	/**
	 * 
	 * @param Map $map
	 * @param array $data
	 * @throws GenerationException
	 */
	public function generateDocument(Map $map, array $data);
	
	/**
	 * 
	 * @param string $filename
	 * @throws ImportException
	 */
	public function import($filename);	
	
}

?>