<?php
    require_once 'SQL.php';
    class Contact extends SQL
    {
        public $nom;
        public $mail;
        public $prenom;

        public function __construct(array $values)
        {
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
        $resultat = new SQL($sql);
        return $resultat->executeSQL($sql, $data);
        }
    }
?>