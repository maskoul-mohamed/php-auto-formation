<?php
    class BankAccount {
        public $accountNumber;
        public $balance;

        public function deposit($amount){
            if($amount > 0){
                $this->$balance += $amount;
            }
        }
    }

    $account = new BankAccount;

    $account->$accountNumber = 1;
    $account->$balance = 100;

    $account->deposit(22);

    echo "Your account balance is: " . $account->$balance;


?>