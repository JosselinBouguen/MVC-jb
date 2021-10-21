<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini MVC Sample</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/MVC-jb/public/style/main.css">
</head>

<body class="<?= isset($_GET['id']) ? 'brick' : '' ?>">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/MVC-jb">Mini MVC Sample</a>
        <ul class="nav nav-pills">
            <?php
                if (\utils\SessionHelpers::isLogin() || isset($_COOKIE["user"])) {
                    //echo '<li class="nav-item"><a href="./me" class="nav-link">Mon compte</a></li>';
                    echo '<li class="nav-item"><a href="'.\utils\SessionHelpers::logout().'" class="nav-link">Deconnexion</a></a></li>';

                }else{
                    echo '<li class="nav-item"><a href="./connexion" class="nav-link">Connexion</a></li>';
                }

            ?>
            <li class="nav-item"><a href="./about" class="nav-link">À propos</a></li>
        </ul>
    </div>
</nav>