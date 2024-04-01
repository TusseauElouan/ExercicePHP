<?php
    require_once 'RequeteSQL.php';
    require_once 'Affichable.php';
    class Menu extends RequeteSQL implements Affichable{

        public $values;
        public $id;
        public $nom;
        public $url;
        public $categorie_id;

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

        public static function getMenuById(int $id):array{
            $sql = "SELECT * FROM menus WHERE id_menu = $id";
            return SQL::querySQL($sql);
        }

        public static function deleteMenuById(int $id){
            $sql = "DELETE FROM menus WHERE id_menu = :id";
            $data = [
                'id' => $id
            ];
            return SQL::executeSQL($sql, $data);
        }

        public static function AddMenu(array $menu){
            $sql = "INSERT INTO menus(nom, categorie_id) VALUES (:nom, :categorie_id)";
            $data = [
                'nom' => $menu['nom'],
                'categorie_id' => $menu['menu']
            ];

            if ($data['categorie_id'] == ""){
                $data['categorie_id'] = NULL;
            }
            return SQL::executeSQL($sql, $data);
        }

        public static function updateMenu(array $menu){
            $sql = "UPDATE menus SET categorie_id = :categorie_id, nom = :nom WHERE id_menu = :id";
            $data = [
                'id' => $menu['id'],
                'nom' => $menu['nom'],
                'categorie_id' => $menu['categorie']
            ];
            return SQL::executeSQL($sql, $data);
        }

        public function afficher(){
                echo '<tr>
                                <td>'.$this->id.'</td>
                                <td>'.$this->nom.'</td>
                                <td>';
                if ($this->getCategorieId() != null){
                    $resultat_categorie = self::getMenuById($this->getCategorieId());
                    echo $resultat_categorie[0]['nom'];
                } else{
                    echo 'Aucune catégorie';
                }
                                
                                echo '</td>
                                <td>
                                    <a href="modification_categorie.php?id='.$this->id.'"><img src="../imgs/pencil-outline.svg" alt="Modifier" title="Modifier" class="imgs-modif"></a>
                                    <a href="admin.php?delete_menu='.$this->id.'&id=0" class="delete-button"><img src="../imgs/trash-outline.svg" alt="Supprimer" title="Supprimer" class="imgs-modif"></a>
                                </td>
                            </tr>';  
    }
}
?>