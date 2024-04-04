<?php

class Book {
    protected $title;
    protected $author;
    protected $year;
    protected $isBorrowed;

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->isBorrowed = false;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getYear() {
        return $this->year;
    }

    public function isBorrowed() {
        return $this->isBorrowed;
    }

    public function setBorrowed($isBorrowed) {
        $this->isBorrowed = $isBorrowed;
    }

    public function onBorrow() {
        echo "Buku \"{$this->title}\" berhasil dipinjam.\n";
    }

    public function onReturn() {
        echo "Buku \"{$this->title}\" berhasil dikembalikan.\n";
    }
}

class FictionBook extends Book {
    private $genre;

    public function __construct($title, $author, $year, $genre) {
        parent::__construct($title, $author, $year);
        $this->genre = $genre;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function onBorrow() {
        echo "Fiction book \"{$this->title}\" berhasil dipinjam.\n";
    }
}

?>
