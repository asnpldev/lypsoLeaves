<?php

/*
 * Deux fonctions sont crées pour lancer une requéte SQL. Un exmple d'appel de ces fonctions dans du code :
 *  - $tableauDeResultats = Connexion::query("SELECT * FROM nom_table");
 *    Le résultat de la requète est enregistré dans la variable $tableauDeResultats 
 *  - $succes = Connexion::exec("INSERT..."); marche aussi pour UPDATE et DELETE
 *    Le résultat de la requete est placé dans la variable $succes : si 0 alors la requète n'a pas
 *    fonctionnée, sinon $succes contiendra le nombre d'enregistrement affectés
 */


class Connection {

    private static $_pdo = null;

    private function __construct() {
        
    }

    private function _get() {
        $dsn = 'mysql:dbname='.$GLOBALS['ENV']['DB_DATABASE'].';host='.$GLOBALS['ENV']['DB_HOST'];
        $user = $GLOBALS['ENV']['DB_USERNAME'];
        $password = $GLOBALS['ENV']['DB_PASSWORD'];

        try {
            self::$_pdo = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
        self::$_pdo->exec('SET NAMES \'utf8\'');
    }


    public function safeQuery($query,$array){
        if (is_null(self::$_pdo)) {
            self::_get();
        }
        $sth=self::$_pdo->prepare($query);
        $sth->execute($array);
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result; 
    }


    public static function query($query) {
        if (is_null(self::$_pdo)) {
            self::_get();
        }
        
        $result = self::$_pdo->query($query);
        if(!$result){
            throw new Exception('Erreur de requête : '.$query);
        }
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function exec($query) {
        if (is_null(self::$_pdo)) {
            self::_get();
        }
        return self::$_pdo->exec($query);
    }

}