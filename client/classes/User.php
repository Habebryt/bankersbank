<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once "Db.php";


class User extends Db
{
  private $dbconn;

  public function __construct()
  {
    $this->dbconn = $this->connect();
  }

  public function getUser($user)
  {
    if ($user) {
      if (is_array($user)) {
        $user = $user['id'];
      }
    }
  }
}
