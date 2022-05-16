<?php dump($viewData)?>
<div class="wrapperAdd">
    <div style="display:flex;flex-direction:column">
        <div class="imgGallery" style="width:15%">
        <img class="carteTypes addDeckImg"  alt="">  
        </div>
        <div class="imgGallery2" style="width:15%">
        <img class="carteTypes addDeckImg2"  alt="">  
        </div>
    </div>
        <div class="container my-4" style="width: 50%">
            <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>" class="btn btn-success float-end">Retour</a>
            
            <form action="" method="POST" class="mt-5">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" name="deckName" class="form-control" id="name" placeholder="Nom du deck">                
                </div>

                <div class="mb-3">
                    <label for="commandant" class="form-label">Commandant</label>
                    <select type="text"  name="commandant" class="form-control" id="nameCommandant" placeholder="Commandant">
                    <?php foreach ($commandList as $ninja): ?>                    
                        <option value="<?=$ninja->getPicture()?>"><?=$ninja->getName()?></option>
                    <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Commandant 2</label>                
                    <select type="text" name="commandant2" class="form-control" id="nameCommandant2" id="name" placeholder="Commandant 2">
                    <option value=""></option>
                    <?php foreach ($commandList as $ninja): ?>
                        <option value="<?=$ninja->getPicture()?>"><?= $ninja->getName()?></option>
                    <?php endforeach ?>
                    </select>
                </div>

                <div class="mb-3">
                    
                    <label for="name" class="form-label">Commandant Image</label>                
                    <select type="text" name="image" class="form-control" id="commandantBack" placeholder="Commandant Image">                    
                    <?php foreach ($background as $ninja): ?>
                        <option style="background-image: url(../img/<?=$ninja->getName()?>.jpg);" value="<?=$ninja->getName()?>"><?=$ninja->getName()?></option>
                    <?php endforeach ?>
                    </select>

                </div>
                <?php for ($i=1; $i < 5; $i++) { 
                include __DIR__ . '/../partials/button/checkboxAdd.tpl.php';
                }?>
                    <button type="submit" class="btn btn-primary mt-5">Valider</button>
                </div>
                
            </form>
            
            <div class="backgroundGallery" style="width:20%">
                <img class="galleryBack" style="width: 100%;"alt="">  
            </div>
            
        </div>
    
</div>

