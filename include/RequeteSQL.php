<?php
require_once 'SQL.php';
class RequeteSQL extends SQL{

    public static function getArticleOrPages(int $id, string $table, string $nom_id){
        $sql = 'SELECT * FROM '.$table.' WHERE '.$nom_id.' = '.$id.' ';
        return SQL::querySQL($sql);
    }

    public static function getAllAuteur(){
        $sql = 'SELECT * FROM auteurs';
        return SQL::querySQL($sql);
    }

    public static function deleteById(int $delete, string $table, string $nom_id){
        $sql = 'DELETE FROM '.$table.' WHERE '.$nom_id.' = :id';
        $data = [
            'id' => $delete
        ];
        return SQL::executeSQL($sql, $data);
    }

    public static function ajouterArticleOrPages(array $values, string $table){
        $sql = 'INSERT INTO '.$table.'(titre, corp_texte, image, date_publication, date_revision, id_auteur, tags, sources) VALUE(:titre, :corp_texte, :image, :date_publication, :date_revision, :id_auteur, :tags, :sources)';
        $data = [
            'titre' => $values['titre'],
            'corp_texte' => $values['text'],
            'image' => "imgs/article.jpg",
            'date_publication' => date('Y-m-d'),
            'date_revision' => date('Y-m-d'),
            'id_auteur' => $values['auteur'],
            'tags' => $values['tags'],
           'sources' => $values['sources']
        ];
        return SQL::executeSQL($sql, $data);
    }

    public static function getAll(string $table){
        $sql = 'SELECT * FROM '.$table;
        return SQL::querySQL($sql);
    }

    public static function updateArticleOrPages(array $values, string $table){
        $sql = 'UPDATE '.$table.' SET titre = :titre, corp_texte = :corp_texte, date_revision = :date_revision, tags = :tags, sources = :sources WHERE id_actualite = :id_actualite';
        $data = [
            'titre' => $values['titre'],
            'corp_texte' => $values['text'],
            'date_revision' => date('Y-m-d'),
            'tags' => $values['tags'],
            'id_actualite' => $values['id'],
            'sources' => $values['sources']
        ];
        return SQL::executeSQL($sql, $data);
    }
}


?>