<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once "Db.php";


class Transaction extends Db
{
  private $dbconn;

  public function __construct()
  {
    $this->dbconn = $this->connect();
  }

  public function getTransactions($userAccount)
  {
    $sql = "SELECT * FROM transactions WHERE account_number = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$userAccount]);
    $card = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $card;
  }
}
