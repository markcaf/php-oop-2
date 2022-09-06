<?php 

    /** The class Product is the basic product with name, type and price*/
    class Product {
        protected $name;
        protected $type;
        protected $price;

        /**
         * Create a new instance of a Product object
         * 
         * @param string $_name the name of the product
         * @param string $_type the category of the product (example: food, toys, accessories)
         * @param float $_price the price of the single product, float with two decimals
         */
        function __construct($_name, $_type, $_price){
            $this->name = $_name;
            $this->type = $_type;
            $this->price = $_price;
        }

        public function getProductName(){
            return $this->name;
        }

        public function setProductName($_name){
            $this->name = $_name;
        }

        public function getProductType(){
            return $this->type;
        }

        public function setProductType($_type){
            $this->type = $_type;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setPrice($_price){
            $this->price = $_price;
        }

    }