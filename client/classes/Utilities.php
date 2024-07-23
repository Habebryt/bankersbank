<?php
class Utilities
{
  public static function firstName($firstName)
  {
    $cleanFirstName = trim($firstName);
    $cleanFirstName = strip_tags($cleanFirstName);
    $cleanFirstName = addslashes($cleanFirstName);
    $cleanFirstName = htmlentities($cleanFirstName);
    return $cleanFirstName;
  }

  public static function convertToCurrency($amount)
  {
    if (!is_numeric($amount)) {
      return "Invalid amount";
    }
    $formattedAmount = number_format((float)$amount, 2, '.', ',');
    return $formattedAmount;
  }


  public static function lastName($lastName)
  {
    $cleanLastName = trim($lastName);
    $cleanLastName = strip_tags($cleanLastName);
    $cleanLastName = addslashes($cleanLastName);
    $cleanLastName = htmlentities($cleanLastName);
    return $cleanLastName;
  }

  public static function email($email)
  {
    $cleanEmail = trim($email);
    $cleanEmail = filter_var($cleanEmail, FILTER_SANITIZE_EMAIL);
    return $cleanEmail;
  }

  public static function phone($phone)
  {
    $cleanPhone = trim($phone);
    $cleanPhone = preg_replace('/[^0-9]/', '', $cleanPhone);
    return $cleanPhone;
  }

  public static function convertToDate(string $datetime): string
  {
    $dateObject = new DateTime($datetime);
    return $dateObject->format('Y-m-d');
  }
}
