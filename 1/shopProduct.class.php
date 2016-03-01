<?php
class ShopProduct {
	public $title = '';
	public $producer = '';
	public $price = '';
	public $numPages = '';
	public $playLength = '';
	public $summartLine = '';

	public function getSummaryLine() {
		if($this instanceOf Book) {
			$title = $this->title;
			$producer = $this->producer;
			$numPages = $this->numPages;
			print("Название: $title\nСоздатель: $producer\nКоличество страниц: $numPages\n");
		}

		elseif($this instanceOf Cd) {
			$title = $this->title;
			$producer = $this->producer;
			$playLength = $this->playLength;
			print("Название: $title\nСоздатель: $producer\nПродолжительность: $playLength\n");
		}
		else
			print('Error');
	}
}

class ShopProductWriter {
	public function write(ShopProduct $product) {
		print("Писатель: $product->producer\n");
	}
}

class Book extends ShopProduct {
	public function __construct($title, $producer, $price, $numPages) {
		$this->title = $title;
		$this->producer = $producer;
		$this->price = $price;
		$this->numPages = $numPages;
	}
}

class Cd extends ShopProduct {
	public function __construct($title, $producer, $price, $playLength) {
		$this->title = $title;
		$this->producer = $producer;
		$this->price = $price;
		$this->playLength = $playLength;
	}
}

$book = new Book('Мастер и Маргарита',
			   'Булгаков',
			   '499',
			   '350');

$cd = new Cd('Звездные войны',
			   'Джордж Лукас',
			   '2199',
			   '90');

// $book->getSummaryLine();
$cd->getSummaryLine();
// $writer = new ShopProductWriter();
// $writer->write($product);
?>