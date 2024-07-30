<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once "Db.php";


class Account extends Db
{
  private $dbconn;

  public function __construct()
  {
    $this->dbconn = $this->connect();
  }

  public function getAccount($userId)
  {
    $sql = "SELECT * FROM client_accounts WHERE user_id = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$userId]);
    $account = $stmt->fetch(PDO::FETCH_ASSOC);
    return $account;
  }

  public function updateBalance($sender, $newBalance)
  {
    $sql = "UPDATE client_accounts SET balance = ? WHERE user_id = ?";
    $stmt = $this->dbconn->prepare($sql);
    $result = $stmt->execute([$newBalance, $sender]);
    if($result){
      return true;
    }else{
      return false;
    }
  }
}
