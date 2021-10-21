<?php

namespace routes;

use controllers\Account;
use controllers\SampleWeb;
use controllers\TodoWeb;
use controllers\UserWeb;
use controllers\VideoWeb;
use routes\base\Route;
use utils\SessionHelpers;

class Web
{
    function __construct()
    {
        $main = new SampleWeb();

        Route::Add('/', [$main, 'home']);
        Route::Add('/about', [$main, 'about']);        
        Route::Add('/connexion', [$main, 'connecter']);
        Route::Add('/inscription', [$main, 'inscription']);

        $todo = new TodoWeb();
        if (isset($_COOKIE["user"]) || \utils\SessionHelpers::isLogin()) { //Si il est connecté alors il peut accéder à toutes les pages de la todolist
            Route::Add('/todo/liste', [$todo, 'liste']); //Ici je n'arrive pas à récupérer la session dans le nouveau controlleur Todoweb
            Route::Add('/todo/liste', [$todo, 'liste']);
            Route::Add('/todo/ajouter', [$todo, 'ajouter']);
            Route::Add('/todo/terminer', [$todo, 'terminer']);
            Route::Add('/todo/supprimer', [$todo, 'supprimer']);
            Route::Add('/connexion', [$main, 'connecter']);
        }



        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    
}
}

