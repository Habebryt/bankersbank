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

  public function loginUser($userdetail, $password)
  {
    try {
      // Initial query to find the user by username or email
      $sql = "SELECT * FROM users WHERE username = :userdetail OR email = :userdetail";

      // Check if the input is a numeric value (account number) and modify the query accordingly
      if (is_numeric($userdetail)) {
        $sql = "SELECT u.*
                    FROM users u
                    JOIN client_accounts ca ON u.id = ca.user_id
                    WHERE ca.account_number = :userdetail";
      }

      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['userdetail' => $userdetail]);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($result) {
        // Verify the password
        if (password_verify($password, $result['password'])) {
          $_SESSION['useronline'] = $result['id'];
          $_SESSION['useronline'] = $result;

          // Redirect based on access level
          if ($result['access_level'] === 'Admin') {
            header("Location: ../admin/html/index.html");
          } elseif ($result['access_level'] === 'Manager') {
            header("Location: ../manager/html/index.php");
          } elseif ($result['access_level'] === 'Client') {
            header("Location: ../client/html/index.php");
          } else {
            header("Location: ../welcome.php");
          }
          exit();
        } else {
          $_SESSION['user_errormsg'] = "Invalid credentials";
          return 0;
        }
      } else {
        $_SESSION['user_errormsg'] = "Invalid credentials";
        return 0;
      }
    } catch (PDOException $e) {
      $_SESSION['user_errormsg'] = $e->getMessage();
      return 0;
    } catch (Exception $e) {
      $_SESSION['user_errormsg'] = $e->getMessage();
      return 0;
    }
  }
}
