<?php
require_once('../Model/employe.php'); // Assurez-vous que le chemin vers le fichier employe.php est correct
require_once('../Controller/EmployeC.php');
// Créez un employé (vous pouvez initialiser ses attributs ici)
$employe1 = new Employe();
$employe1->setId("0");
$employe1->setLastName("Doe");
$employe1->setFirstName("Jane");
$employe1->setPassword("123456789");
$employe1->setPhone("(Insérer le numéro de téléphone)");
$employe1->setEmail("Jane.Doe@gmail.com");
$employe1->setDOB("1er janvier 2000");

// Affichez les informations de l'employé en utilisant var_dump()
echo "Informations brutes de l'employé (var_dump()):\n";
var_dump($employe1);
echo "\n";

// Appelez la méthode show() pour afficher les informations de l'employé de manière structurée
$employeC = new EmployeC();
echo "Informations structurées de l'employé:\n";
//$employeC->show($employe1);

