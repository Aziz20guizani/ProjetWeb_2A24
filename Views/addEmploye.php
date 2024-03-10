<?php
require_once '../Controller/EmployeC.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dOB = $_POST['dOB'];

    $employeC = new EmployeC();
    $employeC->addEmploye($lastName, $firstName, $password, $phone, $email, $dOB);

    header("Location: ListEmployes.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un employé</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        h1 {
            text-align: center;
            color: #1877f2;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dddfe2;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #1877f2;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0e5a8a;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ajouter un employé</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="lastName">Nom:</label><br>
            <input type="text" id="lastName" name="lastName"><br>
            <label for="firstName">Prénom:</label><br>
            <input type="text" id="firstName" name="firstName"><br>
            <label for="password">Mot de passe:</label><br>
            <input type="password" id="password" name="password"><br>
            <label for="phone">Téléphone:</label><br>
            <input type="text" id="phone" name="phone"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="dOB">Date de naissance:</label><br>
            <input type="date" id="dOB" name="dOB"><br><br>
            <input type="submit" value="Ajouter">
        </form>
    </div>
</body>
</html>
