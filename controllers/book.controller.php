<?php
require 'data.php';

$id = $_REQUEST['id'];

$filterBook = array_filter($books, fn($b) => $b['id'] == $id);

$book = array_pop($filterBook);

view('book', [
  'book' => $book
]);
