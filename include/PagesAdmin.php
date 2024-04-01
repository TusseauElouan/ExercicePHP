<?php
require_once 'RequeteSQL.php';
require_once 'Affichable.php';
class PagesAdmin extends RequeteSQL implements Affichable{
    public $id;
    public $titre;
    public $text;
    public $url_img;
    public $tag;
    public $date_modif;
    public $date_publi;
    public $sources;

    public function __construct(array $page){
        $this->id = $page['id_page'];
        $this->titre = $page['titre'];
        $this->text = $page['corp_texte'];
        $this->url_img = $page['image'];
        $this->tag = $page['tags'];
        $this->date_modif = $page['date_revision'];
        $this->date_publi = $page['date_publication'];
        $this->sources = $page['sources'];
    }
    

    public function afficher(){
        echo '<tr>
                <td>'.$this->id.'</td>
                <td>'.$this->titre.'</td>';
        echo '<td>
                    <a href="modification_page.php?id='.$this->id.'"><img src="../imgs/pencil-outline.svg" alt="Modifier" title="Modifier" class="imgs-modif"></a>
                    <a href="admin.php?delete_page='.$this->id.'&id=2" class="delete-button"><img src="../imgs/trash-outline.svg" alt="Supprimer" title="Supprimer" class="imgs-modif"></a>
                </td>
            </tr>';                         
    }


}
?>