<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once "Db.php";


class Card extends Db
{
  private $dbconn;

  public function __construct()
  {
    $this->dbconn = $this->connect();
  }

  public function getCard($userAccount)
  {
    $sql = "SELECT * FROM cards WHERE account_number = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$userAccount]);
    $card = $stmt->fetch(PDO::FETCH_ASSOC);
    return $card;
  }
}
