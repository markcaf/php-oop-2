<?php 

    /** The class RegisteredUser is the user who is registered and logged in*/
    class RegisteredUser extends Guest {
        protected $email;
        protected $password;

        /**
         * Create a new instance of a RegisteredUser object
         * 
         * @param [string] $_name
         * @param [string] $_email
         * @param [string] $_password
         * @param [object] $_paymentCard
         */
        function __construct($_name, $_email, $_password, $_paymentCard){
            $this->name = $_name;
            $this->email = $_email;
            $this->password = $_password;
            $this->paymentCard = $_paymentCard;
        }

        public function getUserEmail(){
            return $this->email;
        }

        public function setUserEmail($_email){
            $this->email = $_email;
        }

        public function getUserPassword(){
            return $this->password;
        }

        public function setUserPassword($_password){
            $this->password = $_password;
        }
    }