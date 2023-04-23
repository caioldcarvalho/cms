<?php

namespace Yanagi\Cms;

use Envms\FluentPDO\Query;

require "../vendor/autoload.php";

class User extends Database
{
  public $id;
  public $username;
  public $password;
  public $email;
  private $isAdmin;


  function login(string $username, string $password)
  {
    $pdo = $this->conn() ?? exit();
    $fluent = new Query($pdo);

    $query = $fluent->from("users")
      ->where("username = ?", $username)
      ->where("password = ?", $password)
      ->fetchAll();

    return !empty($query);
  }

}

// EOF
