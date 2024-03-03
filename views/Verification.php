<?php
include '../Model/employe.php';
include '../Controller/EmployeC.php';

$fname = $_POST['fName'];
$lname = $_POST['lName'];
$phone = $_POST['phone'];
$mail = $_POST['email'];
$dob = $_POST['dob'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$emp = new Employe($fname,$lname,$phone,$mail,$dob,$pass1,$pass2);
var_dump($emp);
$empC =new EmployeC();
$empC->show($emp);
