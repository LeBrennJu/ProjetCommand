<!-- PHP -->

<!-- HTML -->

<div class="paddingDiv" style="padding-top:2%;background-color:#00000099"></div>
<?php foreach ($listeDeck as $deckList):;?>

    <h1 style=""><?= $deckList->getCommandant()?> <?php if($deckList->getCommandant2()!=NULL): ?>& <?= $deckList->getCommandant2()?>  <?php endif; ?>
        <img class="imgDetail" src="../public/assets/img/couleurs/<?= $deckList->getColor1()?>.jpg" alt="">
        <?php if (($deckList->getColor2())!=NULL):?>
            <img class="imgDetail" src="../public/assets/img/couleurs/<?= $deckList->getColor2()?>.jpg" alt="">
        <?php endif; ?>
        <?php if (($deckList->getColor3())!=NULL):?> 
            <img class="imgDetail" src="../public/assets/img/couleurs/<?= $deckList->getColor3()?>.jpg" alt="">
        <?php endif; ?>
        <?php if (($deckList->getColor4())!=NULL):?> 
            <img class="imgDetail" src="../public/assets/img/couleurs/<?= $deckList->getColor4()?>.jpg" alt="">
        <?php endif; ?>
        <?php if (($deckList->getColor5())!=NULL):?> 
            <img class="imgDetail" src="../public/assets/img/couleurs/<?= $deckList->getColor5()?>.jpg" alt="">
        <?php endif; ?>
    </h1>
    <div style=" padding-top:2%; padding-bottom:2%;background-color: #00000099;margin-left: 2%;margin-right: 2%;border-left:1px solid;border-right:1px solid">
    <div class="commandant <?= $deckList->getCommandant()?>" style="cursor:pointer;background-image: url(./../public/assets/img/<?= $deckList->getImage()?>.jpg);margin-left: 8vh">
        <div  style="display:inline-flex;"onclick="document.location='<?= $router->generate('decks-deck',['deck'=>$deckList->getName()]) ?>'">
    
            <div class="box">
                <p class="click">ZOOM</p>
                <a href="../public/assets/img/commandants/<?= $deckList->getCommandant()?>.jpg" data-lightbox="image-1" data-title="<?= $deckList->getCommandant()?>">
                <img class="commandantImage"src="../public/assets/img/commandants/<?= $deckList->getCommandant()?>.jpg"></img></a>
            </div>
            
            <?php if (($deckList->getCommandant2())!=NULL):?>
            <div class="box">
                <p class="click">ZOOM</p>
                <a href="../public/assets/img/commandants/<?= $deckList->getCommandant2()?>.jpg" data-lightbox="image-1" data-title="<?= $deckList->getCommandant2()?>">
                <img class="commandantImage"src="../public/assets/img/commandants/<?= $deckList->getCommandant2()?>.jpg"></img></a>
            </div>
            <?php endif ?>

            
            
                    
        </div>
            <div>
            <form class="deckForm" action="" method="POST" class="mt-5">
                <a value="" href="<?= $router->generate('commandants-commandantPost',['deck'=>$deckList->getName()]) ?>">
                <div class="pretty p-default pretty2" style="display:none;right: -19px;"><input type="checkbox" class="checkBoxCommand" name='id' value="<?= $deckList->getId() ?>" checked /><div class="state p-danger"><label></label></div></div>
                <div class="pretty p-default pretty2" style="right: -19px;width:0%;height:0%"><input type="checkbox" class="checkBoxCommand" name='deck' value="<?= $deckList->getName()?>" checked/><div class="state p-danger"><label></label></div></div>                
                <input class ="btn btn-danger" value ="X" style="top:0%;right:-15px;left:unset;width:2%;padding-right:2vh;" type="submit" src="../public/assets/img/del.jpg">
            </form>
    </div>
    </div>
    </div>    
<?php endforeach ?>
