<?php
    class Customer {
        private $name;

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }
    }

    $client1 = new Customer;
    $client1->setName("Mohamed");

    echo $client1->getName();
?>
