<?php
    
    class Contact
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

        public static function insertInBDD(array $values, $pdo)
        {
        $sql = 'INSERT INTO contacts(nom, prenom, mail) VALUES (:nom, :prenom, :mail)';
        $data = [
            'nom' =>htmlentities($values['nom']),
            'prenom' => htmlentities($values['prenom']),
            'mail' => htmlentities($values['mail'])
        ];
        $prep = $pdo->prepare($sql);
        $result = $prep->execute($data);
        }
    }
?>