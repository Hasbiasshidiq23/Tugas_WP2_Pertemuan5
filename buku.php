<?php

class Book {
  private $title;
  private $author;
  private $yearPublished;
  private $isBorrowed;

  public function __construct($title, $author, $yearPublished) {
    $this->title = $title;
    $this->author = $author;
    $this->yearPublished = $yearPublished;
    $this->isBorrowed = false;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getAuthor() {
    return $this->author;
  }

  public function getYearPublished() {
    return $this->yearPublished;
  }

  public function isBorrowed() {
    return $this->isBorrowed;
  }

  public function borrow() {
    $this->isBorrowed = true;
  }

  public function returnBook() {
    $this->isBorrowed = false;
  }
}