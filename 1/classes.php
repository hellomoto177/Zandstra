<?php
class ShopProduct {
	private $title = '';
	private $producer = '';
	protected $price = '';
	private $discount = 0;
	
	public function __construct($title, $producer, $price) {
		$this->title = $title;
		$this->producer = $producer;
		$this->price = $price;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getProducer() {
		return $this->producer;
	}

	public function getSummaryLine() {
		$str = 'Название: ' . $this->title . "\n";
		$str .= 'Создатель: ' . $this->producer . "\n";
		$str .= 'Цена: ' . $this->price . "\n";
		return $str;
	}

	public function setDiscount($discount) {
		$this->discount = $discount;
	}
    public function getDiscount() {
        return $this->discount;
    }

	public function getPrice() {
		if($this->discount > 0)
			$res = $this->price - ($this->price/100*$this->discount);
		else
			$res = $this->price;
		return $res;
	}
}

class Book extends ShopProduct {
	private $numPages = '';

	public function __construct($title, $producer, $price, $numPages) {
		parent::__construct($title, $producer, $price);
		$this->numPages = $numPages;
	}

	public function getNumPages() {
		return $this->numPages;
	}

	public function getSummaryLine() {
		$res = parent::getSummaryLine();
		$res .= 'Количество страниц: ' . $this->numPages . "\n";
		return $res;
	}
}

class Cd extends ShopProduct {
	private $playLength = '';

	public function __construct($title, $producer, $price, $playLength) {
		parent::__construct($title, $producer, $price);
		$this->playLength = $playLength;
	}

	public function getPlayLength() {
		return $this->playLength;
	}

	public function getSummaryLine() {
		$res = parent::getSummaryLine();
		$res .= 'Продолжительность: ' . $this->playLength . "\n";
		return $res;
	}
}

class ShopProductWriter {
	private $product = array();

	public function addProduct(ShopProduct $product_item) {
        $prod = $product_item->getProducer();
		$this->product[] = $prod;
	}

	public function write() {
		$res = '';
		foreach($this->product as $product_item) {
			$res .= "Создатель: " . $product_item . "<br>";
		}
		return $res;

	}
}
