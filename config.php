<?php
class config {
    private static $pdo =null;

    public static function getConnexion()
    {
        if (!isset(self::$pdo)){
            try{
                self::$pdo = new PD0(
                    'mysql:host=localhost;dbname=atlierPHP',
                    'aziz',
                    'esprit18'
                    [
                        PD0::ALTER_ERRMODE =>PD0::ERRMODE_EXCEPTION,
                        PD0::ALTER_DEFAULT_FETCH_MODE => PD0::FETCH_ASS0C
                    ]
                    );
            } catch(Exception £e){
                die('Erreur:' . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
