<?php 

    /** The class RegisteredUser is the user who is registered and logged in*/
    class Card {
        protected $cardNumber;
        protected $ownerName;
        protected $expirationMonth;
        protected $expirationYear;
        protected $cvv;

        /**
         * Create a new instance of a Payment Card object
         * 
         * @param [string] $_cardNumber 'the number of the card, 16 chars'
         * @param [string] $_ownerName name of the user to associate the card
         * @param [int] $_expirationMonth the expiration month, choose from 1 to 12
         * @param [int] $_expirationYear the expiration year, write the last two digits of the year
         * @param [string] $_cvv the three-digit security code
         */
        function __construct($_cardNumber, $_ownerName, $_expirationMonth, $_expirationYear, $_cvv){
            $this->cardNumber = $_cardNumber;
            $this->ownerName = $_ownerName;
            $this->expirationMonth = $_expirationMonth;
            $this->expirationYear = $_expirationYear;
            $this->cvv = $_cvv;
        }

        public function getCardNumber(){
            return $this->cardNumber;
        }

        public function setCardNumber($_cardNumber){
            $this->cardNumber = $_cardNumber;
        }

        public function getOwnerName(){
            return $this->ownerName;
        }

        public function setOwnerName($_ownerName){
            $this->ownerName = $_ownerName;
        }

        public function getExpirationMonth(){
            return $this->expirationMonth;
        }

        public function setExpirationMonth($_expirationMonth){
            $this->expirationMonth = $_expirationMonth;
        }

        public function getExpirationYear(){
            return $this->expirationYear;
        }

        public function setExpirationYear($_expirationYear){
            $this->expirationYear = $_expirationYear;
        }

        public function getCvv(){
            return $this->cvv;
        }

        public function setCvv($_cvv){
            $this->cvv = $_cvv;
        }

    }