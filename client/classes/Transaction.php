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

  public function addTransaction($userAccount, $type, $amt, $ref, $desc)
  {
    $sql = "INSERT INTO `transactions` (account_number, transaction_type, amount, reference_id, description) VALUES (?,?,?,?,?)";
    $stmt = $this->dbconn->prepare($sql);
    $transaction = $stmt->execute([$userAccount, $type, $amt, $ref, $desc]);
    if ($transaction) {
      return true;
    } else {
      return false;
    }
  }
}
