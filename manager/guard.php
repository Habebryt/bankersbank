<?php
if (!isset($_SESSION['useronline'])) {
  $_SESSION['user_errormsg'] = '<p class="text-danger text-center bg-primary">Access Denied! You need to login </p>';
  header("location: ../../welcome.php");
  exit;
}
