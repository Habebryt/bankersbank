<?php
session_start();
ini_set("display_errors", "1");
require_once "../classes/Client.php";
require_once "../classes/Utilities.php";

$manager = $_SESSION['useronline'];
$managerId = $manager['id'];
$addClient = new Client;

if (isset($_POST['addClient']) && $_POST['addClient'] === "addClient") {
  $username = Utilities::userName($_POST['username']);
  $firstname = Utilities::firstName($_POST['firstname']);
  $lastname = Utilities::lastName($_POST['lastname']);
  $email = Utilities::email($_POST['useremail']);
  $password = $_POST['password'];
  $access = 'client';

  $client = $addClient->addClient($username, $password, $email, $firstname, $lastname, $access, $managerId);

  if ($client === true) {
    $_SESSION['feedback'] = 'User Added Successfully';
    header("location: ../html/accounts.php");
    exit;
  } else {
    $_SESSION['feedback'] = 'Failed to Add User. Try again.';
    header("location: ../html/accounts.php");
    exit;
  }
} else {

  echo "something is wrong";
}
