<?php
class config
{
    private static $pdo = null;

    public static function getConnexion()
    {
        if (!isset(self::$pdo)) {
            $servername = "localhost";
            $username = "root";
            $password = ""; // <-- Check this line, it seems like your password is set to "YES", which might be incorrect.
            $dbname = "atelierphp";

            try {
                self::$pdo = new PDO("mysql:host=$servername;dbname=$dbname", 
                                     $username,
                                     $password,
                                     [
                                         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                                     ]);
                echo ""; // This line should not be in the production code.
            } catch (PDOException $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}

config::getConnexion();

