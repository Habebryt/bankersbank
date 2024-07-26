<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once "Db.php";


class Client extends Db
{
  private $dbconn;

  public function __construct()
  {
    $this->dbconn = $this->connect();
  }

  public function addClient($username, $password, $email, $firstname, $lastname, $access)
  {
    $sql = "INSERT INTO users (username, password, email, firstName, lastName, access_level) VALUES (?,?,?,?,?,?)";
    $stmt = $this->dbconn->prepare($sql);
    $result = $stmt->execute([$username, $password, $email, $firstname, $lastname, $access]);
    if ($result) {
      return true;
    } else {
      return false;
    }
  }

  public function getClients($managerId)
  {
    $sql = "SELECT * FROM users WHERE created_by = ?";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$managerId]);
    $accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $accounts;
  }

  public function getClient($clientId)
  {
    $sql = "SELECT
    client_profiles.*,
    country.*,
    client_profiles.nationality,
    nationality.country_name AS nationality_name,
    state.*
    FROM
    client_profiles
    LEFT JOIN
    country ON client_profiles.country = country.idcountry
    LEFT JOIN
    country AS nationality ON client_profiles.nationality = nationality.idcountry
    LEFT JOIN
    state ON client_profiles.state = state.idstate
    WHERE
    user_id = ?;
    ";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$clientId]);
    $account = $stmt->fetch(PDO::FETCH_ASSOC);
    return $account;
  }

  public function getUser($clientCode)
  {
    $sql = "SELECT
    users.id,
            users.usercode,
            users.username,
            users.email,
            users.firstName,
            users.lastName,
            users.access_level,
            users.last_login,
            users.created_at,
            users.updated_at,
            users.profileImage,
            country.country_name AS country_name,
            state.state_name AS state_name
    FROM
    users
    LEFT JOIN
    country ON users.country_id = country.idcountry
    LEFT JOIN
    state ON users.state_id = state.idstate
    WHERE
    users.usercode = ?;
    ";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$clientCode]);
    $account = $stmt->fetch(PDO::FETCH_ASSOC);
    return $account;
  }
}
