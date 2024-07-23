<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once "Db.php";


class Investment extends Db
{
  private $dbconn;

  public function __construct()
  {
    $this->dbconn = $this->connect();
  }

  public function getInv($userAccount)
  {
    $sql = "SELECT * FROM investments WHERE account_number = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$userAccount]);
    $inv = $stmt->fetch(PDO::FETCH_ASSOC);
    return $inv;
  }

  public function getInvTransactions($userAccount)
  {
    $sql = "SELECT * FROM inv_transactions WHERE account_number = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$userAccount]);
    $inv = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $inv;
  }
}
