<h1 style="width: fit-content;">Connexion</h1>
    <form action="" style="text-align: -webkit-center;width:unset" method="POST" class="mt-5">
                    <div class="mb-3">
                        <label for="name" class="form-label"></label>
                        <input type="text" name="identifiant" class="form-control" style="width:unset" id="name" placeholder="Identifiant">                
                    </div>

                    <div class="mb-3">
                        <label for="commandant" class="form-label"></label>
                        <input type="text"  name="password" class="form-control" style="width:unset" id="nameCommandant" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Connexion</button>
                </form>

<a href="<?= $router->generate('add-add')?>">Créer nouvel utilisateur</a>