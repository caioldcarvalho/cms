<?php

namespace Yanagi\Cms;

use PDO;

require '../vendor/autoload.php';

class Database {
    private static $db;

    static function conn() {

        try {
            if (!isset(self::$db)):
                self::$db = new PDO("mysql:host=" . DB_HOST. ";dbname=" . DB_NAME, DB_USER, DB_PASS);
                self::$db->exec("set names utf8");
                self::$db->exec("SET character_set_connection=utf8");
                self::$db->exec("SET character_set_client=utf8");
                self::$db->exec("SET character_set_results=utf8");
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            endif;
            // echo "Conexão realizada com sucesso! <br>";
            
        } catch (\PDOException $e) {
            echo "Erro ao conectar ao banco <br>" . $e->getMessage();
        }
        return self::$db;    
    }

}

// EOF
