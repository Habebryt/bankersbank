<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once "Db.php";


class Transaction extends Db
{
  private $dbconn;

  public function __construct()
  {
    $this->dbconn = $this->connect();
  }

  public function getTransactions($managerId)
  {
    $sql = "SELECT
    transactions.*,      -- Select all columns from the transactions table
    account_managers.*,  -- Select all columns from the account_managers table
    client_accounts.*,    -- Select all columns from the client_accounts table
    client_profiles.*     -- Select all columns from the client_profile table
FROM
    transactions
LEFT JOIN
    client_accounts ON transactions.account_number = client_accounts.account_number
LEFT JOIN
    client_profiles ON client_accounts.user_id = client_profiles.user_id
LEFT JOIN
    account_managers ON client_accounts.account_manager_id = account_managers.id
WHERE
    account_managers.user_id = ?;
    ";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$managerId]);
    $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $transactions;
  }

//   public function transactionActivity($managerId)
//   {
//     $sql = "SELECT
//     transactions.*,      -- Select all columns from the transactions table
//     inv_transactions.*,
//     biz_transactions.*,
//     account_managers.*,  -- Select all columns from the account_managers table
//     client_accounts.*,    -- Select all columns from the client_accounts table
//     client_profiles.*     -- Select all columns from the client_profile table
// FROM
//     transactions
// LEFT JOIN
//     client_accounts ON transactions.account_number = client_accounts.account_number
//   LEFT JOIN
//     inv_transactions ON client_accounts.account_number = inv_transactions.account_number
//     LEFT JOIN
//     biz_transactions ON client_accounts.account_number = biz_transactions.account_number
// LEFT JOIN
//     client_profiles ON client_accounts.user_id = client_profiles.user_id
// LEFT JOIN
//     account_managers ON client_accounts.account_manager_id = account_managers.id
// WHERE
//     account_managers.user_id = ?;
//     ";
//     $stmt = $this->dbconn->prepare($sql);
//     $stmt->execute([$managerId]);
//     $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $transactions;
//   }

public function transactionActivity($managerId)
{
  $sql = "SELECT
  transactions.*,      -- Select all columns from the transactions table
  inv_transactions.*,
  biz_transactions.*,
  account_managers.*,  -- Select all columns from the account_managers table
  client_accounts.*,    -- Select all columns from the client_accounts table
  client_profiles.*     -- Select all columns from the client_profile table
FROM
  transactions
LEFT JOIN
  client_accounts ON transactions.account_number = client_accounts.account_number
LEFT JOIN
  inv_transactions ON client_accounts.account_number = inv_transactions.account_number
  LEFT JOIN
  biz_transactions ON client_accounts.account_number = biz_transactions.account_number
LEFT JOIN
  client_profiles ON client_accounts.user_id = client_profiles.user_id
LEFT JOIN
  account_managers ON client_accounts.account_manager_id = account_managers.id
WHERE
  account_managers.user_id = ?;
  ";
  $stmt = $this->dbconn->prepare($sql);
  $stmt->execute([$managerId]);
  $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Initialize arrays for each transaction type
  $generalTransactions = [];
  $businessTransactions = [];
  $investmentTransactions = [];

  foreach ($transactions as $transaction) {
      $baseTransaction = array_intersect_key($transaction, array_flip([
          'transactionid', 'account_number', 'transaction_type', 'amount',
          'transaction_date', 'transaction_status', 'reference_id', 'description',
          'created_at', 'updated_at', 'transaction_ref', 'currency'
      ]));

      if (!empty($transaction['invtransactionid'])) {
          // Investment transaction
          $baseTransaction['invtransactionid'] = $transaction['invtransactionid'];
          $investmentTransactions[] = $baseTransaction;
      } elseif (!empty($transaction['biztransactionid'])) {
          // Business transaction
          $baseTransaction['biztransactionid'] = $transaction['biztransactionid'];
          $businessTransactions[] = $baseTransaction;
      } else {
          // General transaction (neither investment nor business)
          $generalTransactions[] = $baseTransaction;
      }
  }

  // Return all transaction types
  return [
      'general' => $generalTransactions,
      'business' => $businessTransactions,
      'investment' => $investmentTransactions
  ];
}

  public function getTransaction($transRef)
  {
    $sql = "SELECT
    transactions.*,      -- Select all columns from the transactions table
    account_managers.*,  -- Select all columns from the account_managers table
    client_accounts.*,    -- Select all columns from the client_accounts table
    client_profiles.*     -- Select all columns from the client_profile table
FROM
    transactions
LEFT JOIN
    client_accounts ON transactions.account_number = client_accounts.account_number
LEFT JOIN
    client_profiles ON client_accounts.user_id = client_profiles.user_id
LEFT JOIN
    account_managers ON client_accounts.account_manager_id = account_managers.id
WHERE
    transactions.reference_id = ?;
    ";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$transRef]);
    $transactions = $stmt->fetch(PDO::FETCH_ASSOC);
    return $transactions;
  }

  public function cTransactions($managerId, $tStatus)
  {
    $sql = "SELECT
    transactions.*,      -- Select all columns from the transactions table
    account_managers.*,  -- Select all columns from the account_managers table
    client_accounts.*,    -- Select all columns from the client_accounts table
    client_profiles.*     -- Select all columns from the client_profile table
FROM
    transactions
LEFT JOIN
    client_accounts ON transactions.account_number = client_accounts.account_number
LEFT JOIN
    client_profiles ON client_accounts.user_id = client_profiles.user_id
LEFT JOIN
    account_managers ON client_accounts.account_manager_id = account_managers.id
WHERE
account_managers.user_id = ? AND
    transactions.transaction_status = ?;
    ";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$managerId, $tStatus]);
    $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $transactions;
  }

  public function dTransactions($managerId, $tStatus)
  {
    $sql = "SELECT
    transactions.*,      -- Select all columns from the transactions table
    account_managers.*,  -- Select all columns from the account_managers table
    client_accounts.*,    -- Select all columns from the client_accounts table
    client_profiles.*     -- Select all columns from the client_profile table
FROM
    transactions
LEFT JOIN
    client_accounts ON transactions.account_number = client_accounts.account_number
LEFT JOIN
    client_profiles ON client_accounts.user_id = client_profiles.user_id
LEFT JOIN
    account_managers ON client_accounts.account_manager_id = account_managers.id
WHERE
account_managers.user_id = ? AND
    transactions.transaction_status = ?;
    ";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$managerId, $tStatus]);
    $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $transactions;
  }

  public function pTransactions($managerId, $tStatus)
  {
    $sql = "SELECT
    transactions.*,      -- Select all columns from the transactions table
    account_managers.*,  -- Select all columns from the account_managers table
    client_accounts.*,    -- Select all columns from the client_accounts table
    client_profiles.*     -- Select all columns from the client_profile table
FROM
    transactions
LEFT JOIN
    client_accounts ON transactions.account_number = client_accounts.account_number
LEFT JOIN
    client_profiles ON client_accounts.user_id = client_profiles.user_id
LEFT JOIN
    account_managers ON client_accounts.account_manager_id = account_managers.id
WHERE
account_managers.user_id = ? AND
    transactions.transaction_status = ?;
    ";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$managerId, $tStatus]);
    $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $transactions;
  }
}
