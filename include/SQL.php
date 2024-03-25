<?php
    class SQL{
        public static function connexionBDD(){
            $host = '127.0.0.1';
            $db= 'exercicephp';
            $user = 'root';
            $pass = '';
            $port = 3306;
            $charset = 'utf8mb4' ;

            $dsn = "mysql:host=$host; dbname=$db;charset=$charset;port=$port";
            return $pdo = new PDO($dsn, $user, $pass);
        }

        public static function querySQL(string $sql){
            $pdo = SQL::connexionBDD();
            $resultat = $pdo->prepare($sql);
            $resultat->execute();
            return $resultat->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function executeSQL(string $sql, array $values){
            $pdo = SQL::connexionBDD();
            $resultat = $pdo->prepare($sql);
            $resultat->execute($values);
            return $resultat;
        }
    }
?>