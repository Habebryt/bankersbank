<?php
session_start();
ini_set("display_errors", "1");
require_once "../classes/Client.php";
require_once "../classes/Utilities.php";
require_once "../classes/Account.php";


$manager = $_SESSION['useronline'];
$managerId = $manager['id'];
$profile = new Client;
$managerOnline = new Account;

$managerData = $managerOnline->getManager($managerId);

$managerIdx = $managerData['id'];

print_r($managerData);


$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
// $otherName = $_POST['otherName'];
// $dob = $_POST['dob'];
// $gender = $_POST['gender'];
// $nat = $_POST['nationality'];
// $passType = $_POST['passType'];
// $pass = $_POST['passNumber'];
// $managerId = $_POST['managerId'];
// $clientId = $_POST['clientId'];

if (isset($_POST['clientProfile']) && $_POST['clientProfile'] === "clientProfile") {
  $firstname = Utilities::firstName($firstName);
  $lastname = Utilities::lastName($lastName);
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $nat = $_POST['nationality'];
  $passType = $_POST['passType'];
  $pass = $_POST['passNumber'];
  $managerIdx = $managerData['id'];
  $clientId = $_POST['clientId'];

  $client = $profile->clientProfile($clientId, $managerIdx, $firstName, $lastname, $dob, $gender, $nat, $passType, $pass);

  var_dump($client);
  die;

  if ($client === true) {
    $_SESSION['feedback'] = 'Profile Updated Successfully';
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
