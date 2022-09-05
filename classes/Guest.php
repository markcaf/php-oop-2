<?php 

    /** The class Guest is the user who purchases without being registered */
    class Guest{
        protected $name;
        protected $paymentCard;

        /**
         * Create a new instance of a Guest object, default name is "Guest"
         * 
         * @param [object] $_paymentCard
         */
        function __construct($_paymentCard){
            $this->name = "Guest";
            $this->paymentCard = $_paymentCard;
        }

        public function getUserName(){
            return $this->name;
        }

        public function setUserName($_name){
            $this->name = $_name;
        }
    }