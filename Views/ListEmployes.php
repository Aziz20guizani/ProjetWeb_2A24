<?php
require_once '../Controller/EmployeC.php';

$employeC = new EmployeC();
$employes = $employeC->listEmployes();

if ($employes === null || empty($employes)) {
    echo "No employees found."; // Or you can handle this case differently based on your requirements.
} else {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des employés</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .action-buttons a {
            text-decoration: none;
            margin-right: 5px;
            padding: 5px 10px;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
        }

        .action-buttons a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Liste des employés</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Date de naissance</th>
            <th>Action</th>
        </tr>
        <?php foreach ($employes as $employe): ?>
            <tr>
                <td><?php echo $employe['id']; ?></td>
                <td><?php echo $employe['firstName']; ?></td>
                <td><?php echo $employe['lastName']; ?></td>
                <td><?php echo $employe['email']; ?></td>
                <td><?php echo $employe['phone']; ?></td>
                <td><?php echo $employe['dOB']; ?></td>
                <td><a href="delete.php?id=<?php echo $employe['id']; ?>">delete</a></td>
                <td><a href="updateEmploye.php?id=<?php echo $employe['id']; ?>">Modifier</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
<?php
}
?>
