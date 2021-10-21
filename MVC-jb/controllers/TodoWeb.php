<?php
namespace controllers;

use controllers\base\Web;
use models\TodoModel;

class TodoWeb extends Web
{
    private $todoModel;

    function __construct(){
        $this->todoModel = new TodoModel();
    }
    function liste()
    {
        $this->header(); // Affichage de l'entête.
        $todos = $this->todoModel->getAllNonTermine(); // Récupération des TODOS présents en base.
        include("views/todos/liste.php"); // Affichage de votre vue.
        $this->footer(); // Affichage de votre pied de page.
    }
    
    function ajouter($texte = "")
    {
        //Ajout d'une condition de texte non vide (dans le contrôleur car ça représente un traitement des actions )
        if($texte != ""){
            $this->todoModel->ajouterTodo($texte);          
        }
        $this->redirect("./liste");
    }

    function terminer($id = ''){
        if($id != ""){
            $this->todoModel->marquerCommeTermine($id);
        }
        $this->redirect("./liste");
    }
    function supprimer($id = ''){
        if($id != ""){
            $this->todoModel->supprimerTodo($id);
        }
        $this->redirect("./liste");
    }

    
}
