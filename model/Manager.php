<?php

class Manager extends Connect
{
  public function getName($table)
  {
    $pdo = parent::get_instance();
    $sql = "SELECT * FROM $table name";
    $statement = $pdo->query($sql);
    $statement->execute();

    return $statement->fetch(PDO::FETCH_ASSOC);
  }

  public function updateName()
  {
    $pdo = parent::get_instance();


    // $sql = "UPDATE responsible SET name='Cintia' WHERE name='João'";

  }
}
