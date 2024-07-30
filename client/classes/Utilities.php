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

  public static function formatCurrency($amount)
  {
    return number_format($amount, 2, '.', ',');
  }

  public static function maskCardNumber($cardNumber)
  {
    $cardNumber = strval($cardNumber);

    $lastFour = substr($cardNumber, -4);

    $length = strlen($cardNumber);

    $asteriskGroups = floor(($length - 1) / 4);

    $masked = '';
    for ($i = 0; $i < $length - 4; $i++) {
      if ($i % 4 == 0 && $i != 0) {
        $masked .= ' ';
      }
      $masked .= '*';
    }

    if ($masked !== '') {
      $masked .= ' ';
    }

    $masked .= $lastFour;

    return $masked;
  }

  public static function generateReferenceNumber()
  {
    $length = 10;
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
      $index = rand(0, strlen($characters) - 1);
      $randomString .= 'TRX' . $characters[$index];
    }

    return $randomString;
  }
}
