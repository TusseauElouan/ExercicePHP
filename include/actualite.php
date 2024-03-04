<?php

class Actualite{
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

    public function __construct(int $id, string $titre, string $text, string $url_img, string $nom_auteur, string $prenom_auteur, string $tag, string $date_modif, string $date_publi, string $sources){
        $this->id = $id;
        $this->titre = $titre;
        $this->text = $text;
        $this->url_img = $url_img;
        $this->nom_auteur = $nom_auteur;
        $this->prenom_auteur = $prenom_auteur;
        $this->tag = $tag;
        $this->date_modif = $date_modif;
        $this->date_publi = $date_publi;
        $this->sources = $sources;
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
}


?>