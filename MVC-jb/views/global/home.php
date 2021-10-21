<div class="container mt-5">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img class src="public/img/todo.jpg">               
                        <h3>Créez votre ToDoList en ligne !</h3>
                        <p>
                            Ce site va vous permettre de suivre en temps réelle les tâches à réaliser

                        </p>
                        <p>
                            Une Todo list, ou liste de tâches en français, est un procédé qui se veut simple et efficace pour gérer les tâches d'un projet. Ces tâches peuvent être indépendantes ou devoir, au contraire, être accomplies dans un certain ordre.
                        </p>
                        <h3>Comment accéder à la TodoListe ?</h3>
                        <p>
                            C'est tout simple ! Il vous suffit de vous connecter à votre compte, ou d'en créer un si vous n'en avez pas déjà un.
                        </p>
                        <?php //Rajout pour l'évolution 2 
                        if (\utils\SessionHelpers::isLogin()) {
                            echo '<a href="./todo/liste" class="btn btn-outline-dark btn-lg">Visiter la ToDoList !<i class="bi bi-check"></i></a>';
                        }?>                                               
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Evolution 4-->
<div class="container mt-5">
    <div class="row">
        <div class="text-center">
            <h3>/💻\ Ce site est le résultat d'un TP réalisé lors du BTS SIO /💻\</h3>
            <h4>J'ai donc dû réaliser le TP, puis cinq évolutions sur celui-ci :</h4>
        </div>
        <div class="col-md-6">
            <div class="card p-3">
                <div class="d-flex flex-row mb-3"><img src="public/img/1.png" width="70">
                    <div class="d-flex flex-column ml-2"><span>Evolution</span><span class="text-black-50"></span>Fait<span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                </div>
                <h6>Ajouter dans la page d'accueil du site un lien permettant d'accéder à votre TodoList. Quelques consignes à respecter :</h6>
                <div class="d-flex justify-content-between install mt-3"><span>-Le lien doit être centré dans la page.</span></div>
                <div class="d-flex justify-content-between install mt-3"><span>-Le lien doit avoir l'apparence d'un bouton<span></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-3">
                <div class="d-flex flex-row mb-3"><img src="public/img/2.png" width="70">
                    <div class="d-flex flex-column ml-2"><span>Evolution</span><span class="text-black-50"></span>Fait<span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                </div>
                <h6>On souhaite finalement masquer de l'affichage par défaut l'ensemble des enregistrements de la table TODO ayant termine = 1.</h6>
                <div class="d-flex justify-content-between install mt-3"><span>-Modifier le code du modèle afin d'y ajouter une méthode.</span></div>
                <div class="d-flex justify-content-between install mt-3"><span>-Appeler cette méthode depuis votre page à la place du getAll().</span></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-3">
                <div class="d-flex flex-row mb-3"><img src="public/img/3.png" width="70">
                    <div class="d-flex flex-column ml-2"><span>Evolution</span><span class="text-black-50"></span>Fait<span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                </div>
                <h6>Limiter l'accès de la partie TODOList seulement aux personnes avec un compte sur la plateforme.</h6>
                <div class="d-flex justify-content-between install mt-3"><span>-Quels impacts sont à prévoir dans le routeur ?</span></div>
                <div class="d-flex justify-content-between install mt-3"><span>-Est-ce nécessaire de créer un nouveau modèle ?</span></div>
                <div class="d-flex justify-content-between install mt-3"><span>-Est-ce nécessaire de créer un nouveau contrôleur ?</span></div>
                <div class="d-flex justify-content-between install mt-3"><span>-Combien de vue sera(ont) nécessaire(s) en plus de celles existantes ?</span></div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-3">
                <div class="d-flex flex-row mb-3"><img src="public/img/4.png" width="70">
                    <div class="d-flex flex-column ml-2"><span>Evolution</span><span class="text-black-50">Non fait</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                </div>
                <h6> Maintenant que nous avons un système d'authentification, je vous propose de sauvegarder qui a créé la TODO pour ce faire :.</h6>
                <div class="d-flex justify-content-between install mt-3"><span>-Modifier la base de données afin d'ajouter « l'email / nom d'utilisateur » de la personne ayant créé la TODO</span></div>
                <div class="d-flex justify-content-between install mt-3"><span>-Modifier la méthode d'ajout dans le modèle pour enregistrer l'information</span></div>
                <div class="d-flex justify-content-between install mt-3"><span>-Ajouter dans la vue, l'affichage de l'identité de la personne.</span></div>
                <div class="d-flex justify-content-between install mt-3"><span></span></div>


            </div>
        </div>
        <div class="col">
            <div class="card p-3">
                <div class="d-flex flex-row mb-3"><img src="public/img/5.png" width="70">
                    <div class="d-flex flex-column ml-2"><span>Evolution</span><span class="text-black-50">Fait</span><span class="ratings"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></div>
                </div>
                <h6>Modifier la page d'accueil de votre site afin que celle-ci présente votre projet</h6>
            </div>
        </div>

    </div>
</div>
