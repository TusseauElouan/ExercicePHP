<?php
require_once 'RequeteSQL.php';
require_once 'Affichable.php';

class Actualite extends RequeteSQL implements Affichable{
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

    public static function getFive() {
        $sql = 'SELECT * FROM actualites ORDER BY date_revision DESC LIMIT 5';
        return SQL::querySQL($sql);
    }

    public static function getArticleAuteur(int $id){
        $sql = 'SELECT auteurs.nom, auteurs.prenom FROM auteurs, actualites WHERE auteurs.id_auteur = actualites.id_auteur AND actualites.id_actualite = '.$id.' ';
        return SQL::querySQL($sql);
    }

    public function afficher(){
        echo "<a href='pages/article.php?id=". $this->id ."' class='link-actu'>
                    <div class='actualite'>
                        <div class='img-actu-container'>
                            <img src='".$this->url_img."' alt='Image Actu' title='Image Actu' class='img-actu'/>
                        </div>
                        <div class='content-actu'>
                            <p class='tags'>Tags :".$this->tag."</p>
                            <p class='date_modif'>Dernière modification :".$this->date_modif."</p>
                            <h3 class='titre_actu'>".$this->titre."</h3>
                            <p class='texte-content'>".substr($this->text, 0, 300)."...</p>
                            <p class='auteurs'>Auteur : ".$this->nom_auteur." ".$this->prenom_auteur."</p>
                            <p class='date_publi'>Date de publication : ".$this->date_publi."</p>
                            <p class='sources'>Sources :".$this->sources."</p>
                        </div>
                    </div>
                </a>";
    }
}


?>