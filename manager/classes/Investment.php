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

  public function getInvestment($accountNumber)
  {
    $sql = "SELECT * FROM investments WHERE account_number = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$accountNumber]);
    $account = $stmt->fetch(PDO::FETCH_ASSOC);
    return $account;
  }

  public function getInvestmentTransactions($accountNumber)
  {
    $sql = "SELECT * FROM inv_transactions WHERE account_number = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$accountNumber]);
    $account = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $account;
  }
}
