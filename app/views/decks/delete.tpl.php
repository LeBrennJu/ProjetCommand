<div class="container my-4">
        <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>" class="btn btn-success float-end">Retour</a>
        <h2>Supprimer Carte</h2>
        
        <form action="" method="POST" class="mt-5">
            <?php dump ($viewData)?>
            <label for="color1"> Deck : </label>
                <input type="checkbox" name="name" id="blanc" value="<?= $commandant->getCommandant() ?>" /> <img  style="width:20%;" src="../public/assets/img/Commandants/<?= $commandant->getCommandant() ?>.jpg" alt="">
            <br/><br/>
                <button type="submit" class="btn btn-primary mt-5">Valider</button>
            </div>
            
        </form>
    </div>