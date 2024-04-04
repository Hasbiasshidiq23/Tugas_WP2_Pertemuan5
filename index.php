<?php

require_once "buku.php";
require_once "penyimpanan.php";

$library = new Library();

// Menambahkan beberapa buku
$book1 = new Book("Solo Leveling", "Crunchyrol", 2020);
$book2 = new Book("Tensei Slime Shittara Datta Ken", "Bandai Namco", 2018);
$book3 = new Book("One Punch Man", "Madhouse", 2009);

$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

// Meminjam buku
$library->borrowBook($book1);

// Menampilkan daftar buku yang tersedia
$availableBooks = $library->getAvailableBooks();

echo "Daftar Buku yang ada :" . "\n";
foreach ($availableBooks as $book) {
  echo "Judul: " . $book->getTitle() . "\n";
  echo "Penulis: " . $book->getAuthor() . "\n";
  echo "Tahun Terbit: " . $book->getYearPublished() . "\n";
  echo "\n";
}

echo "Daftar Buku yang Dipinjam :" . "\n";
foreach ($library->getBooks() as $book) {
  if ($book->isBorrowed()) {
    echo "Judul: " . $book->getTitle() . "\n";
    echo "Penulis: " . $book->getAuthor() . "\n";
    echo "Tahun Terbit: " . $book->getYearPublished() . "\n";
    echo "\n";
  }
}