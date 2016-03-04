<?php

require_once __DIR__ . '/../bootstrap.php';

use Tester\Assert;


// latest
test(function () {
	$books = array();
	foreach (ServiceLocator::getBookFacade()->getLatest() as $book) {
		$books[] = $book->bookTitle;
	}

	Assert::same(array('1001 tipu a triku pro PHP', 'JUSH', 'Dibi'), $books); // intentionally "same" due to orderBy() testing
});