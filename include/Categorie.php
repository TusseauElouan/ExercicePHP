<?php
require_once 'SQL.php';
require_once 'Affichable.php';

 class Categorie extends SQL implements Affichable{

    public $values;

    public function __construct(array $values){
        $this->id = $values['id_menu'];
        $this->nom = $values['nom'];
        $this->url = $values['url'];
        $this->categorie_id = $values['categorie_id'];
    }

    public function getId():int{
        return $this->id;
    }

    public function getNom():string{
        return $this->nom;
    }

    public static function getSousMenu(int $id):array{
        $sql = "SELECT * FROM menus WHERE categorie_id = $id";
        return SQL::querySQL($sql);
    }

    public static function getCategorie(int $id):array{
        $sql = "SELECT * FROM menus WHERE id_menu = $id";
        return SQL::querySQL($sql);
    }

    public function afficher(){
        echo "<li><a href='menu_display.php?id=". $this->id. "'>". $this->nom . "</a></li>";
    }
}
?>