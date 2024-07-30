<?php
session_start();
require_once "../classes/Account.php";
require_once "../classes/Transaction.php";
require_once "../classes/Transfer.php";
require_once "../classes/Utilities.php";



$sender = $_SESSION['useronline']['id'];

$receiver = $_POST['receiverName'];
$account = $_POST['receiverAccount'];
$bank = $_POST['bankName'];
$amount = floatval($_POST['transferAmount']);
$desc = $_POST['transferReason'];

$getAcct = new Account;
$tr = new Transaction;
$trs = new Transfer;

try {
    // First, get account balance
    $userAccount = $getAcct->getAccount($sender);
    $senderBalance = $userAccount['balance'];
    $senderAccount = $userAccount['account_number'];

    // Check if account balance can afford to make the necessary transfer
    if ($senderBalance < $amount) {
        throw new Exception("Insufficient funds for this transfer.");
    }

    // Generate a unique reference for this transfer
    $ref = Utilities::generateReferenceNumber();

    // Make the transfer
    $addTransfer = $trs->addTransfer($senderAccount, $account, $bank, $receiver, $amount, $ref, $desc);

    if ($addTransfer) {
        // If transfer is successful, update account balance
        $newBalance = $senderBalance - $amount;
        $updateAccount = $getAcct->updateBalance($sender, $newBalance);

        if ($updateAccount) {
            // Add the transfer to transactions
            $type = 'debit'; // or whatever type you use for transfers
            $addTransaction = $tr->addTransaction($senderAccount, $type, $amount, $ref, $desc);

            if ($addTransaction) {
                $_SESSION['feedback'] = "Transfer successful. Reference: $ref";
            } else {

                $_SESSION['feedback'] = "Transfer completed but transaction record failed. Please contact support. Reference: $ref";
            }
        } else {

            throw new Exception("Critical error: Transfer completed but balance update failed. Please contact support immediately. Reference: $ref");
        }
    } else {
        throw new Exception("Transfer failed. Please try again later.");
    }

    // Redirect to home or a confirmation page
    header("Location: ../html/index.php");
    exit;

} catch (Exception $e) {
    $_SESSION['error'] = $e->getMessage();
    header("Location: ../html/index.php"); // Redirect back to the transfer page
    exit;
}
