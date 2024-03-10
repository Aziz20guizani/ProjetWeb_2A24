<?php
require_once '../Controller/EmployeC.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dOB = $_POST['dOB'];
    // Récupérez les autres champs du formulaire

    $employeC = new EmployeC();
    $employeC->updateEmploye($id, $lastName, $firstName, $password, $phone, $email, $dOB,);

    header("Location: ListEmployes.php");
    exit();
}

