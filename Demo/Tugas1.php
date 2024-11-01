<?php
namespace LibrarySystem;

trait Logger {
    public function log($message) {
        echo "[Log]: " . $message . "\n";
    }
}

abstract class Item {
    protected $title;
    protected $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    abstract public function getDetails();
}

class Book extends Item {
    private $pageCount;

    public function __construct($title, $author, $pageCount) {
        parent::__construct($title, $author);
        $this->pageCount = $pageCount;
    }

    public function getDetails() {
        return "Book: {$this->title} by {$this->author}, {$this->pageCount} pages";
    }
}

class Magazine extends Item {
    private $issueNumber;

    public function __construct($title, $author, $issueNumber) {
        parent::__construct($title, $author);
        $this->issueNumber = $issueNumber;
    }

    public function getDetails() {
        return "Magazine: {$this->title} by {$this->author}, Issue #{$this->issueNumber}";
    }
}


class Collection {
    use Logger;

    private $items = [];

    public function addItem(Item $item) {
        $this->items[] = $item;
        $this->log("Item '{$item->getDetails()}' added to collection.");
    }

    public function showItems() {
        foreach ($this->items as $item) {
            echo $item->getDetails() . "\n";
        }
    }
}


class Library {
    private $name;
    private $collections;

    public function __construct($name) {
        $this->name = $name;
        $this->collections = new Collection();
    }

    public function addCollectionItem(Item $item) {
        $this->collections->addItem($item);
    }

    public function displayCollections() {
        echo "Collections in {$this->name}:\n";
        $this->collections->showItems();
    }

    public function __toString() {
        return "Library: {$this->name}";
    }
}


$library = new Library("City Library");
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 180);
$magazine1 = new Magazine("National Geographic", "Various", 2023);

$library->addCollectionItem($book1);
$library->addCollectionItem($magazine1);
$library->displayCollections();

echo $library;