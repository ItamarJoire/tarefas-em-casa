<?php

class Manager extends Connect
{
  public function getName()
  {
    $pdo = parent::get_instance();
    $sql = "SELECT * FROM responsible name";
    $statement = $pdo->query($sql);
    $statement->execute();

    return $statement->fetch(PDO::FETCH_ASSOC);
  }

  public function updateName()
  {
    // $pdo = parent::get_instance();

    $this->getName();



    // $sql = "UPDATE responsible SET name='Cintia' WHERE name='João'";

  }
}
