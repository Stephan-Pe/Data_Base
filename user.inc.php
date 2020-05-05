<?php

class User {
    // Properties
    private $name;
    private $lastname;
    private $Id;
    private $username;
    private $password;

    public function __construct($name, $lastname, $Id, $username, $password) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->Id = $Id;
        $this->username = $username;
        $this->password = $password;
    }

    public function getName() {
        return $this->name. " " .$this->lastname. " " .$this->username . " " .$this->Id . " " .$this->password;
    }

    // Methods
    public function setName($username) {
        $this->username = $username;
    }

}