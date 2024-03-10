<?php
require_once 'config.php';

class EmployeC {
    public function listEmployes() {
        $config = new Config();
        $conn = $config->getConnexion();

        $query = "SELECT * FROM `users`";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }
    public function deleteEmploye($id) {
        $config = new Config();
        $conn = $config->getConnexion();
    
        $query = "DELETE FROM `users` WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function addEmploye($lastName, $firstName, $password, $phone, $email, $dOB) {
        $config = new Config();
        $conn = $config->getConnexion();
    
        $query = "INSERT INTO users (lastName, firstName, password, phone, email, dOB) VALUES (:lastName, :firstName, :password, :phone, :email, :dOB)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':dOB', $dOB);
        $stmt->execute();
    }
    public function getEmployeById($id) {
        $config = new Config();
        $conn = $config->getConnexion();
    
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    
        $employe = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $employe;
    }
    public function updateEmploye($id, $lastName, $firstName, $password, $phone, $email, $dOB) {
        $config = new Config();
        $conn = $config->getConnexion();
    
        $query = "UPDATE users SET lastName = :lastName, firstName = :firstName, password = :password, phone = :phone, email = :email, dOB = :dOB WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':dOB', $dOB);
        $stmt->execute();
    }
    
    
    
}

?>
