<?php
require_once('../Model/employe.php'); // Assurez-vous que le chemin vers le fichier employe.php est correct
require_once('../Controller/EmployeC.php');
// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez les informations du formulaire
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $dOB = isset($_POST['dOB']) ? $_POST['dOB'] : '';

    // Créez un objet Employe à partir de ces informations
    $employe1 = new Employe();
    $employe1->setId($id);
    $employe1->setLastName($lastName);
    $employe1->setFirstName($firstName);
    $employe1->setPassword($password);
    $employe1->setPhone($phone);
    $employe1->setEmail($email);
    $employe1->setDOB($dOB);

    // Affichez les informations de l'employé en utilisant var_dump()
    echo "Informations brutes de l'employé (var_dump()):\n";
    var_dump($employe1);
    echo "\n";

    // Appelez la méthode show() pour afficher les informations de l'employé de manière structurée
    $employeC = new EmployeC();
    echo "Informations structurées de l'employé:\n";
    //$employeC->show($employe1);
} else {
    echo "Le formulaire n'a pas été soumis.";
}
