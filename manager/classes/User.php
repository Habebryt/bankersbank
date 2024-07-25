<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once "Db.php";

class User extends Db
{
  private $dbconn;

  public function __construct()
  {
    $this->dbconn = $this->connect();
  }

  public function logoutUser()
  {
    session_unset();
    session_destroy();
  }

  public function getUser($userId)
  {
    $sql = "SELECT *
FROM client_profiles
JOIN users ON client_profiles.user_id = users.id
JOIN client_accounts ON client_profiles.user_id = client_accounts.user_id
JOIN country ON client_profiles.country = country.idcountry
JOIN state ON client_profiles.state = state.idstate
WHERE client_profiles.user_id = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$userId]);
    $account = $stmt->fetch(PDO::FETCH_ASSOC);
    return $account;
  }
}
