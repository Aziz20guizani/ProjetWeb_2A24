<?php
require_once '../Controller/EmployeC.php';

// Vérifier si l'identifiant de l'employé à modifier est passé en paramètre
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les informations de l'employé à modifier
    $employeC = new EmployeC();
    $employe = $employeC->getEmployeById($id); // Implémentez cette méthode pour récupérer les données de l'employé par son identifiant

    if ($employe) {
        // Afficher le formulaire de mise à jour avec les informations de l'employé
        ?>

        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Modifier un employé</title>
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
            
            <form action="updateProcess.php" method="post">
                <input type="hidden" name="id" value="<?php echo $employe['id']; ?>">
                <label for="lastName">Nom:</label><br>
                <input type="text" id="lastName" name="lastName" value="<?php echo $employe['lastName']; ?>"><br>
                <label for="firstName">Prénom:</label><br>
                <input type="text" id="firstName" name="firstName" value="<?php echo $employe['firstName']; ?>"><br>
                <label for="password">Mot de passe:</label><br>
                <input type="password" id="password" name="password" value="<?php echo $employe['password']; ?>"><br><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" value="<?php echo $employe['email']; ?>"><br><br>
                <label for="phone">Téléphone:</label><br>
                <input type="text" id="phone" name="phone" value="<?php echo $employe['phone']; ?>"><br><br>
                <label for="dOB">Date de naissance:</label><br>
                <input type="date" id="dOB" name="dOB" value="<?php echo $employe['dOB']; ?>"><br><br>
                <input type="submit" value="Enregistrer les modifications">
            </form>
        </body>
        </html>

        <?php
    } else {
        echo "Aucun employé trouvé avec cet identifiant.";
    }
} else {
    echo "Identifiant d'employé non spécifié.";
}
?>
