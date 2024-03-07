<?php
    class Contact
    {
        public $nom;
        public $mail;
        public $prenom;

        public function __construct(string $nom, string $prenom, string $mail)
        {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->mail = $mail;
        }
    }
?>