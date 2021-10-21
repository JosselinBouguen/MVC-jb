<?php

namespace controllers;

use controllers\base\Web;
use models\base\SQL;
use models\TodoModel;
use models\SampleModel;


class SampleWeb extends Web
{
    private $userModel;

    function __construct(){
        $this->userModel = new SampleModel();
    }

    function home()
    {
        $this->header();
        include("views/global/home.php");
        $this->footer();
    }

    function about()
    {
        $this->header(); // Va afficher le header de la page (mais comment ? Avez-vous regardé ?)
        include("views/global/about.php");
        $this->footer(); // Va afficher le footer de la page (mais comment ? Avez-vous regardé ?)
    }
    function liste()
    {
        $this->header(); // Va afficher le header de la page (mais comment ? Avez-vous regardé ?)
        include("views/global/list.php");
        $this->footer(); // Va afficher le footer de la page (mais comment ? Avez-vous regardé ?)
    }
    function ajouter()
    {
        $this->header(); // Va afficher le header de la page (mais comment ? Avez-vous regardé ?)
        include("views/global/about.php");
        $this->footer(); // Va afficher le footer de la page (mais comment ? Avez-vous regardé ?)
    }
    function terminer($id)
    { 
        include("views/global/terminer.php");  
        /** */    
    }
    function supprimer($id)
    {
        include("views/global/supprimer.php");
    }
//Rajout pour évolution 2

    function connecter($user = '',$pass=''){
        $this->header();
        $userBool=0;
        if($user != "" && $pass !=""){
            $users = $this->userModel->getAll();
            foreach($users as $u){
                if(($u['nom_usr']==$user || $u['mail_usr']==$user) && password_verify($pass, $u['mdp_usr'])){
                    \utils\SessionHelpers::login($user);
                    setcookie("user",$u['mail_usr'], time() + (86400 * 30));
                    include("views/global/home.php");
                    $userBool=1;
                }
            }if($userBool==0){include("views/global/connexion.php");}
        }else{include("views/global/connexion.php");}
        $this->footer();    
    }
    function inscription($user = '', $mail='',$pass='' ,$pass2=''){
        $this->header();
        if($user != "" && $mail != "" && $pass==$pass2){
            $hashmdp = password_hash($pass, PASSWORD_BCRYPT);
            $this->userModel->ajouterUser($user,$mail,$hashmdp);
            \utils\SessionHelpers::login($user);
            setcookie("user",$mail, time() + (86400 * 30));
            include("views/global/home.php");
        } else{
            include("views/global/inscription.php");
            $phrase = "user: ".$user."// mdp: ".$pass."// mail : ".$mail;
        }
        $this->footer();

    }
   

}