<?php
    require_once 'SQL.php';

    class Menu extends SQL{
        public function __construct(array $values){
            $this->id = $values['id_menu'];
            $this->nom = $values['nom'];
            $this->url = $values['url'];
            $this->categorie_id = $values['categorie_id'];
        }

        public function getId():int
        {
            return $this->id;
        }

        public function getNom():string
        {
            return $this->nom;
        }

        public function getUrl():string
        {
            return $this->url;
        }

        public function getCategorieId()
        {
            return $this->categorie_id;
        }

        public static function getMenu():array{
            $sql = "SELECT * FROM menus WHERE ISNULL(categorie_id) = 1";    
            return SQL::querySQL($sql);
        }

        public static function getMenuByCategorie(int $categorie_id):array{
            $sql = "SELECT * FROM menus WHERE categorie_id = $categorie_id";
            return SQL::querySQL($sql);
        }

        public static function getMenuById(int $id, int $categorie_id):array{
            $sql = "SELECT nom FROM menus WHERE id_menu = $categorie_id";
            return SQL::querySQL($sql);
        }

        public static function getAllMenu():array{
            $sql = "SELECT * FROM menus";
            return SQL::querySQL($sql);
        }



        public static function AddMenu(){
            $sql = "INSERT INTO menus(nom, url, sousmenu) VALUES (:nom, :url, :categorie_id)";
            $data = [
                'nom' =>htmlentities($_POST['nom']),
                'url' => htmlentities($_POST['url']),
                'categorie_id' => htmlentities($_POST['categorie_id'])
            ];
            return SQL::executeSQL($sql, $data);
        }
    }
?>