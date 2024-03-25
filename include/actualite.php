<?php
require_once 'SQL.php';
class Actualite extends SQL{
    public $id;
    public $titre;
    public $text;
    public $url_img;
    public $nom_auteur;
    public $prenom_auteur;
    public $tag;
    public $date_modif;
    public $date_publi;
    public $sources;
    public $resultat;

    public function __construct(array $article, array $auteur){
        $this->id = $article['id_actualite'];
        $this->titre = $article['titre'];
        $this->text = $article['corp_texte'];
        $this->url_img = $article['image'];
        $this->nom_auteur = $auteur['nom'];
        $this->prenom_auteur = $auteur['prenom'];
        $this->tag = $article['tags'];
        $this->date_modif = $article['date_revision'];
        $this->date_publi = $article['date_publication'];
        $this->sources = $article['sources'];
    }

    public function getID() :string
    {
        return $this->id;
    }

    public function getTitre() :string
    {
        return $this->titre;
    }
    public function getText() :string
    {
        return $this->text;
    }

    public function getUrlImage() :string
    {
        return $this->url_img;
    }

    public function getNomAuteur() :string
    {
        return $this->nom_auteur;
    }

    public function getPrenomAuteur() :string
    {
        return $this->prenom_auteur;
    }

    public function getTag() :string
    {
        return $this->tag;
    }

    public function getDateModif() :string
    {
        return $this->date_modif;
    }

    public function getDatePubli() :string
    {
        return $this->date_publi;
    }

    public function getSources() :string
    {
        return $this->sources;
    }

    public function apercu():string{
        return substr($this->text, 0, 300).'...';
    }

    public static function getAuteur(){
        $sql = 'SELECT auteurs.nom, auteurs.prenom FROM auteurs, actualites WHERE auteurs.id_auteur = actualites.id_auteur ORDER BY actualites.date_revision DESC LIMIT 5';
        return SQL::querySQL($sql);
    }

    public static function getAll() {
        $sql = 'SELECT * FROM actualites ORDER BY date_revision DESC LIMIT 5';
        return SQL::querySQL($sql);
    }

    public static function getArticleAuteur(int $id){
        $sql = 'SELECT auteurs.nom, auteurs.prenom FROM auteurs, actualites WHERE auteurs.id_auteur = actualites.id_auteur AND actualites.id_actualite = '.$id.' ';
        return SQL::querySQL($sql);
    }

    public static function getArticle(int $id){
        $sql = 'SELECT * FROM actualites WHERE id_actualite = '.$id.' ';
        return SQL::querySQL($sql);
    }
}


?>