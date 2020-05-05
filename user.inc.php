<?php

class User {
    // Properties
    public $name;
    public $lastname;
    public $Id;
    public $username;
    public $password;

    public function __construct($name, $lastname, $Id, $username, $password) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->Id = $Id;
        $this->username = $username;
        $this->password = $password;
    }

    // Methods
    public function setName($username) {
        $this->username = $username;
    }

}