<?php

class Adress {
    // Properties
    private $street;
    private $city;
    private $zip;

    public static $userzip = 18;

    public function __construct($street, $city, $zip) {
        $this->street = $street;
        $this->city = $city;
        $this->zip = $zip;
    }
    // Methods
    public function setZip($zip) {
        $this->zip = $zip;
    }
    public function getZip() {
        return $this->street. " " .$this->city. " " .$this->zip;
    }
    public function getUserZip() {
        return self::$zip;
    }


}