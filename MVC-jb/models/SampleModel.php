<?php
namespace models;

use models\base\SQL;

class SampleModel extends SQL
{
    public function __construct()
    {
        parent::__construct('users', 'Id_usr');
    }
    function userTest($nom,$mdp)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE nom_usr = :nom AND mdp_usr = :mdp;");
        $stmt->bindValue(':nom', $nom);
        $stmt->bindValue(':mdp', $mdp);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    function ajouterUser($user,$mail,$pass){
        $stmt = $this->pdo->prepare("INSERT INTO users (nom_usr , mail_usr, mdp_usr) values (:nom, :mail, :mdp)");
        $stmt->bindValue(':nom', $user);
        $stmt->bindValue(':mail', $mail);
        $stmt->bindValue(':mdp', $pass);


        $stmt->execute();

    }
}