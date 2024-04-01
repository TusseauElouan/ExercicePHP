<?php
require_once 'RequeteSQL.php';
require_once 'Affichable.php';
class ArticleAdmin extends RequeteSQL implements Affichable{
    public $values;
    public $id;
    public $titre;
    public $text;
    public $url_img;
    public $tag;
    public $date_modif;
    public $date_publi;
    public $sources;

    public function __construct(array $article){
        $this->id = $article['id_actualite'];
        $this->titre = $article['titre'];
        $this->text = $article['corp_texte'];
        $this->url_img = $article['image'];
        $this->tag = $article['tags'];
        $this->date_modif = $article['date_revision'];
        $this->date_publi = $article['date_publication'];
        $this->sources = $article['sources'];
    }
    

    public function afficher(){
        echo '<tr>
                <td>'.$this->id.'</td>
                <td>'.$this->titre.'</td>';
        echo '<td>
                    <a href="modification_article.php?id='.$this->id.'"><img src="../imgs/pencil-outline.svg" alt="Modifier" title="Modifier" class="imgs-modif"></a>
                    <a href="admin.php?delete_actualite='.$this->id.'&id=1" class="delete-button"><img src="../imgs/trash-outline.svg" alt="Supprimer" title="Supprimer" class="imgs-modif"></a>
                </td>
            </tr>';                         
    }

}
?>