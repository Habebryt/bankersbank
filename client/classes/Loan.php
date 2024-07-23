<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once "Db.php";


class Loan extends Db
{
  private $dbconn;

  public function __construct()
  {
    $this->dbconn = $this->connect();
  }

  public function facilityLoans($userAccount)
  {
    $sql = "SELECT * FROM facility_loans WHERE account_number = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$userAccount]);
    $facilityLoans = $stmt->fetch(PDO::FETCH_ASSOC);
    return $facilityLoans;
  }

  public function mortgageLoans($userAccount)
  {
    $sql = "SELECT * FROM mortgage_loans WHERE account_number = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$userAccount]);
    $mortgage = $stmt->fetch(PDO::FETCH_ASSOC);
    return $mortgage;
  }

  public function cashLoans($userAccount)
  {
    $sql = "SELECT * FROM cash_loans WHERE account_number = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$userAccount]);
    $cashLoans = $stmt->fetch(PDO::FETCH_ASSOC);
    return $cashLoans;
  }
}
