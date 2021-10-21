<div class="container mt-5">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <!-- zone de connexion -->
                    <form action="./inscription" method="post" class="add">
                        <h1>Inscription</h1>
                        <div class="row">
                            <label><b>Nom d'utilisateur</b></label>
                            <div class="text-center">
                                <input type="text" placeholder="Entrez le nom d'utilisateur" id="user" name="user" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <label><b>Mail</b></label>
                            <div class="text-center">
                                <input type="email" placeholder="Entrez l'adresse email" id="mail" name="mail" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <label><b>Mot de passe</b></label>
                            <div class="text-center">
                                <input type="password" placeholder="Entrez le mot de passe" id="pass" name="pass" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <label><b>Répetez le mot de passe</b></label>
                            <div class="text-center">
                                <input type="password" placeholder="Entrez le mot de passe" id="pass2" name="pass2" required>
                            </div>
                        </div><br>
                        <input type="submit" class="btn btn-outline-dark" value='Connexion'><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
