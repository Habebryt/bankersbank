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

  public function getAccount($userId, $accountNumber)
  {
    $sql = "SELECT * FROM client_accounts WHERE account_number = ? OR user_id = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$userId, $accountNumber]);
    $account = $stmt->fetch(PDO::FETCH_ASSOC);
    return $account;
  }


  public function getAccounts($managerId)
  {
    $sql = "SELECT client_accounts.*
              FROM client_accounts
              JOIN account_managers ON client_accounts.account_manager_id = account_managers.id
              WHERE account_managers.user_id = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$managerId]);
    $accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $accounts;
  }
}
