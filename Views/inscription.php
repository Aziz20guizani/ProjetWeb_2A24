
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    
    <h1>Inscription</h1>
    
    <form action="Verification.php" method="post">
        

        <label for="id">Id :</label>
        <input type="text" id="lastName" name="lastName" required><br>
        <label for="lastName">Nom :</label>
        <input type="text" id="lastName" name="lastName" required><br>

        <label for="firstName">Prénom :</label>
        <input type="text" id="firstName" name="firstName" required><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required><br>

        <label for="phone">Téléphone :</label>
        <input type="text" id="phone" name="phone"><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="dOB">Date de naissance :</label>
        <input type="date" id="dOB" name="dOB" required><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
