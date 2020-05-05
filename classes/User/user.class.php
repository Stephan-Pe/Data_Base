<?php

namespace User;

class User {
    // Properties
    private $name;
    private $lastname;
    private $age;
    private $Id;
    private $username;
    private $password;

    public static $userAge = 18;

    public function __construct($name, $lastname, $age, $Id, $username, $password) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->Id = $Id;
        $this->username = $username;
        $this->password = $password;
    }
    // Methods
    public function setName($username) {
        $this->username = $username;
    }
    public function getName() {
        return $this->name. " " .$this->lastname. " " .$this->username . " " .$this->Id . " " .$this->password;
    }
    public function getUserAge() {
        return self::$userAge;
    }
    public static function setUserAge($newUA) {
        self::$userAge = $newUA;
    }


}