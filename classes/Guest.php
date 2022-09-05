<?php 

    /** The class Guest is the user who purchases without being registered */
    class Guest{
        protected $name;

        /**
         * Create a new instance of a Guest object, default name is "Guest"
         * 
         */
        function __construct(){
            $this->name = "Guest";
        }

        public function getGuestName(){
            return $this->name;
        }

        public function setGuestName($_name){
            $this->name = $_name;
        }
    }