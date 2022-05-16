<div class="container my-4">
        <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>" class="btn btn-success float-end">Retour</a>
        <h2>Ajouter Carte</h2>
        
        <form action="" method="POST" class="mt-5">
            <?php dump ($viewData)?>
            <label for="color1"> Deck : </label>
            <?php foreach ($listeDeck as $deck): ?>
                <input type="checkbox" name="name" id="blanc" value="<?= $deck->getName() ?>" /> <img  style="width:20%;" src="../public/assets/img/Commandants/<?= $deck->getCommandant() ?>.jpg" alt="">
                
                <?php endforeach ?>
                
            <br/><br/>
                <button type="submit" class="btn btn-primary mt-5">Valider</button>
            </div>
            
        </form>
    </div>
