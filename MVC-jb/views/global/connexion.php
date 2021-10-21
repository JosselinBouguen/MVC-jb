<div class="container mt-5">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <!-- zone de connexion -->              
                    <form action="./connexion" method="post" class="add">
                        <h1>Connexion</h1>
                        <div class="row">        
                            <label><b>Nom d'utilisateur ou Adresse mail</b></label>
                            <div class="text-center">
                                <input type="text" placeholder="Entrer le nom d'utilisateur" id="user" name="user" required>
                            </div>
                        </div><br>
                        <div class="row">     
                            <label><b>Mot de passe</b></label>
                            <div class="text-center">
                                <input type="password" placeholder="Entrer le mot de passe" id="pass" name="pass" required>
                            </div>
                        </div><br>
                        <input type="submit" class="btn btn-outline-dark" value='Connexion'><br>
                        <a href="./inscription">Vous n'avez pas de compte ?</a>

                    </form>                                
                </div>
            </div>
        </div>
    </div>
</div>