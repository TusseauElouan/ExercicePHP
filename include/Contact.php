<?php
    require_once 'RequeteSQL.php';
    require_once 'Affichable.php';
    class Contact extends RequeteSQL implements Affichable
    {
        public $nom;
        public $mail;
        public $prenom;
        public $id;

        public function __construct(array $values)
        {
            $this->id = $values['id_contact'];
            $this->nom = $values['nom'];
            $this->prenom = $values['prenom'];
            $this->mail = $values['mail'];
        }

        public function getNom():string
        {
            return $this->nom;
        }

        public function getMail():string
        {
            return $this->mail;
        }

        public function getPrenom():string
        {
            return $this->prenom;
        }

        public static function insertInBDD(array $values)
        {
        $sql = 'INSERT INTO contacts(nom, prenom, mail) VALUES (:nom, :prenom, :mail)';
        $data = [
            'nom' =>htmlentities($values['nom']),
            'prenom' => htmlentities($values['prenom']),
            'mail' => htmlentities($values['mail'])
        ];
        
        return SQL::executeSQL($sql, $data);
        }

        public function afficher(){
            echo '<tr>
                    <td>'.$this->id.'</td>
                    <td>'.$this->nom.'</td>
                    <td>'.$this->prenom.'</td>
                    <td>'.$this->mail.'</td>';
            echo '<td>
                    <a href="admin.php?delete_contact='.$this->id.'&id=3" class="delete-button"><img src="../imgs/trash-outline.svg" alt="Supprimer" title="Supprimer" class="imgs-modif"></a>
                  </td>
            </tr>';
        }

    }
?>