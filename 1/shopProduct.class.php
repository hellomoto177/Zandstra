<?php

require('classes.php');

/* КЛИЕНТСКИЙ КОД */

$book = new Book('Мастер и Маргарита',
			   'Булгаков',
			   '500',
			   '350');

$cd = new Cd('Звездные войны',
			   'Джордж Лукас',
			   '2199',
			   '90');


// $book->getSummaryLine();
// $book->discount = '5';
// $book->getPrice();

// echo $cd->getSummaryLine();
// $cd->setDiscount('50');
// echo $cd->getPrice();

//echo phpinfo();

$writer = new ShopProductWriter();

$writer->addProduct($book);
$writer->addProduct($cd);
//
//var_dump($book);
//
//echo $writer->write();


// $writer = new ShopProductWriter();
// $writer->write($product);
?>