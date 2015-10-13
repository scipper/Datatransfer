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
	 * @see \scipper\Datatransfer\TransferService::generateMapByTest()
	 */
	public function generateMap(IncomingData $data) {
		throw new GenerationException("not implemented yet.");
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \scipper\Datatransfer\TransferService::generateEmptyDocument()
	 */
	public function generateEmptyDocument(Map $map) {
		throw new GenerationException("not implemented yet.");
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