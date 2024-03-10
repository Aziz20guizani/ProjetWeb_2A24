<?php
class Employe {
    public $id;
    public $lastName;
    public $firstName;
    public $password;
    public $phone;
    public $email;
    public $dOB; // Date de naissance

    public function setId($id) {
        $this->id = $id;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setDOB($dOB) {
        $this->dOB = $dOB;
    }

    public function __construct() {
        $this->id = "0";
        $this->lastName = "Doe";
        $this->firstName = "Jane";
        $this->password = "123456789";
        $this->phone = "(Insérer le numéro de téléphone)";
        $this->email = "Jane.Doe@gmail.com";
        $this->dOB = "1er janvier 2000";
    }

    // Ajoutez ici d'autres méthodes ou fonctionnalités spécifiques à la classe Employe
}
