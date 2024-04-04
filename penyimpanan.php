<?php

class Library {
  private $books;

  public function __construct() {
    $this->books = [];
  }

  public function addBook(Book $book) {
    $this->books[] = $book;
  }

  public function borrowBook(Book $book) {
    if ($book->isBorrowed()) {
      throw new Exception("Buku sudah dipinjam!");
    }

    $book->borrow();
  }

  public function returnBook(Book $book) {
    if (!$book->isBorrowed()) {
      throw new Exception("Buku tidak dipinjam!");
    }

    $book->returnBook();
  }

  public function getBooks() {
    return $this->books;
  }

  public function getAvailableBooks() {
    return array_filter($this->books, function($book) {
      return !$book->isBorrowed();
    });
  }
}