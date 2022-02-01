<?php
    class BankAccount {
        public $accountNumber;
        public $balance;
    }

    $account = new BankAccount();

    $account->$accountNumber = 1;
    $account->$balance = 100;

    echo "Your account Number is: " . $account->$accountNumber;
?>