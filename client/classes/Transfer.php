<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once "Db.php";


class Transfer extends Db
{
  private $dbconn;

  public function __construct()
  {
    $this->dbconn = $this->connect();
  }

  public function addTransfer($senderAcct, $receiverAcct, $bank, $receiverName, $amt, $ref, $desc)
  {
    $sql = "INSERT INTO `transfers` (from_account_number, to_account_number, bank_name, receiver, amount, reference_number, description) VALUES (?,?,?,?,?,?,?)";
    $stmt = $this->dbconn->prepare($sql);
    $transfer = $stmt->execute([$senderAcct, $receiverAcct, $bank, $receiverName, $amt, $ref, $desc]);
    if ($transfer) {
      return true;
    } else {
      return false;
    }
  }
}
