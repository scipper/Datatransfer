<?php

namespace scipper\Datatransfer;

use de\lsb\Core\Entities\MasterTest;

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
	 * @param MasterTest $masterTest
	 * @return NULL|Map
	 * @throws GenerationException
	 */
	public function generateMapByTest(MasterTest $masterTest);
	
	/**
	 * 
	 * @param Map $map
	 * @throws GenerationException
	 */
	public function generateEmptyDocument(Map $map);
	
	/**
	 * 
	 * @param Map $map
	 * @param array $users
	 * @throws GenerationException
	 */
	public function generateDocument(Map $map, array $users);
	
	/**
	 * 
	 * @param string $filename
	 * @throws ImportException
	 */
	public function import($filename);	
	
}

?>