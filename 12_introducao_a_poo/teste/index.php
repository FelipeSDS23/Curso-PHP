<?php

    class Passenger {

        public $name;
        public $age;
        public $setNumber;

        function __construct($name, $age, $setNumber) {
            $this->name = $name;
            $this->age = $age;
            $this->setNumber = $setNumber;
        }

        public function getName() {
            return $this->name;
        }

        public function getAge() {
            return $this->age;
        }

        public function getSeatNumber() {
            return $this->setNumber;
        }

        public function setSeatNumber($seatNumber) {
            $this->setNumber = $seatNumber;
        }

    }

?>
