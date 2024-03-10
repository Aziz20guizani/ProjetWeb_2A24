<?php
require_once '../Controller/EmployeC.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $employeC = new EmployeC();
    $employeC->deleteEmploye($id);
    header("Location: ListEmployes.php");
    exit();
} else {
    echo "ID d'employé non spécifié.";
}
?>
