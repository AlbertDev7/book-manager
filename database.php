<?php

class DB
{
  private $db;

  public function __construct()
  {
    $this->db = new PDO('sqlite:database.sqlite');
  }

  /**
   * Retorna todos os livros do banco de dados
   * 
   * @return array[book]
   */

  public function books()
  {
    $query = $this->db->query("select * from books");

    $items = $query->fetchAll();

    return array_map(fn($item)=> Book::make($item), $items);
  }

  public function book($id)
  {
    $sql = "select * from books ";

    $sql .= "where id = " . $id . ";";

    $query = $this->db->query($sql);

    $items = $query->fetchAll();

    return array_map(fn($item)=> Book::make($item), $items);
  }
}
