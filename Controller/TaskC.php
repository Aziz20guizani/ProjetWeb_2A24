<?php
// Inclure le fichier qui contient la connexion à la base de données
require_once '../Controller/Config.php';
require_once 'config.php';
// Créer une instance de la classe Config pour obtenir la connexion
$config = new Config();
$connexion = $config->getConnexion();

// Récupérer les informations sur la structure de la table Employe
$query = "DESCRIBE users";
$stmt = $connexion->query($query);
$attributs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des attributs de la table Employe</title>
</head>
<body>
    <h1>Liste des attributs de la table Employe</h1>
    <table border="1">
        <tr>
            <th>Nom de l'attribut</th>
            <th>Type de données</th>
            <th>Clé primaire</th>
            <th>Clé étrangère</th>
        </tr>
        <?php foreach ($attributs as $attribut): ?>
            <tr>
                <td><?php echo $attribut['Field']; ?></td>
                <td><?php echo $attribut['Type']; ?></td>
                <td><?php echo $attribut['Key']; ?></td>
                <td><?php echo $attribut['Extra']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

<?php

class TaskC {
    // Autres méthodes de la classe TaskC

    public function searchTaskByTitle($title) {
        $config = new Config();
        $conn = $config->getConnexion();

        $query = "SELECT * FROM Task WHERE title LIKE :title";
        $stmt = $conn->prepare($query);
        $titleParam = "%$title%";
        $stmt->bindParam(':title', $titleParam);
        $stmt->execute();

        $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $tasks;
    }
    public function getTasksByDuration($duration) {
        $config = new Config();
        $conn = $config->getConnexion();

        $query = "SELECT * FROM Task WHERE duration > :duration";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':duration', $duration);
        $stmt->execute();

        $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $tasks;
    }
    public function deleteTasksDone() {
        $config = new Config();
        $conn = $config->getConnexion();

        $query = "DELETE FROM Task WHERE state = 'terminé'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
    }
    
}


