<?php

class Library {
    private static $books = [];

    public static function addBook(Book $book) {
        self::$books[] = $book;
    }

    public static function borrowBook($title) {
        foreach (self::$books as $book) {
            if ($book->getTitle() == $title && !$book->isBorrowed()) {
                $book->setBorrowed(true);
                $book->onBorrow(); 
                return;
            }
        }
        echo "Buku \"$title\" tidak tersedia atau sudah dipinjam.\n";
    }

    public static function returnBook($title) {
        foreach (self::$books as $book) {
            if ($book->getTitle() == $title && $book->isBorrowed()) {
                $book->setBorrowed(false);
                $book->onReturn(); 
                return;
            }
        }
        echo "Buku \"$title\" tidak ditemukan atau belum dipinjam.\n";
    }

    public static function printAvailableBooks() {
        echo "Daftar Buku Tersedia:\n";
        foreach (self::$books as $book) {
            if (!$book->isBorrowed()) {
                echo "- {$book->getTitle()} ({$book->getAuthor()} - {$book->getYear()})\n";
            }
        }
    }
}

?>
