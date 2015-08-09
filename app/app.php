<?php
    // start object
    // declare class
    class Contact
    {
        // class properties
        private $name
        private $address
        private $phone
        //construct and indexed array
        function __construct($new_name, $new_address, $new_phone)
        {
            $this->name = $new_name;
            $this->address = $new_address;
            $this->phone = $new_phone;
        }
        //getters and setters
        //name
        function setName($new_Name)
        {
            $this->name = (string) $new_name;
        }
        function getName()
        {
            return $this->new_name;
        }
        //address
        function setAddress($new_address)
        {
            $this->name = (string) $new_address;
        }
        function getAddress()
        {
            return $this->new_address;
        }
        //phone number
        function setPhone($new_phone)
        {
            $this->name = (string) $new_phone;
        }
        function getPhone()
        {
            return $this->new_phone;
        }
        // end object
        /* Save Contact in $_SESSION variable */
        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }
        /* return the list of all of our contacts    */
        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }
        // reset to blank array when delete
        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }
    }
 ?>
