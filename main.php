//Nama: Riska Raysa Noor
//npm: 21552011393

<?php

require_once 'Book.php';
require_once 'Library.php';

$book1 = new Book("The Alchemist", "Paulo Coelho", 1988);
$book2 = new FictionBook("Pride and Prejudice", "Jane Austen", 1813, "Romance");
$book3 = new Book("To Kill a Mockingbird", "Harper Lee", 1960);
$book4 = new FictionBook("The Picture of Dorian Gray", "Oscar Wilde", 1890, "Gothic fiction");
$book5 = new FictionBook("Moby-Dick", "Herman Melville", 1851, "Adventure");
$book6 = new Book("One Hundred Years of Solitude", "Gabriel García Márquez", 1967);

Library::addBook($book1);
Library::addBook($book2);
Library::addBook($book3);
Library::addBook($book4);
Library::addBook($book5);
Library::addBook($book6);

while (true) {
    echo "\nSelamat datang di Perpustakaan!\n";
    echo "Silakan pilih fitur yang ingin Anda gunakan:\n";
    echo "1. Tampilkan Buku Tersedia\n";
    echo "2. Pinjam Buku\n";
    echo "3. Mengembalikan Buku\n";
    echo "4. Keluar\n";

    $choice = readline("Masukkan nomor fitur: ");

    switch ($choice) {
        case '1':
          Library::printAvailableBooks();
          break;
        case '2':
            $titleToBorrow = readline("Masukkan judul buku yang ingin dipinjam: ");
            Library::borrowBook($titleToBorrow);
            break;
        case '3':
            $titleToReturn = readline("Masukkan judul buku yang ingin dikembalikan: ");
            Library::returnBook($titleToReturn);
            break;
        case '4':
            echo "Terima kasih telah menggunakan layanan perpustakaan.\n";
            exit;
        default:
            echo "Pilihan tidak valid.\n";
            break;
    }
}

?>
