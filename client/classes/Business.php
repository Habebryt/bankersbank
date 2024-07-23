<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once "Db.php";


class Business extends Db
{
  private $dbconn;

  public function __construct()
  {
    $this->dbconn = $this->connect();
  }

  public function getBiz($userAccount)
  {
    $sql = "SELECT * FROM businesses WHERE account_number = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$userAccount]);
    $biz = $stmt->fetch(PDO::FETCH_ASSOC);
    return $biz;
  }
}
