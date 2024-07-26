<?php
ini_set("display_errors", "1");
session_start();
require_once "../classes/User.php";
require_once "../classes/Utilities.php";

$UserAuthentication = new User;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $userdetail = Utilities::firstName($_POST['email-username']);
  $password = $_POST['password'];
  $loginResult = $UserAuthentication->loginUser($userdetail, $password);

  if ($loginResult === 0) {
    header("Location: ../welcome.php");
    exit();
  }
}
