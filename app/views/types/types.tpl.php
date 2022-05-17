  <div style="    background-color: #00000099;margin-right: 2%; margin-left: 2%;    border-left: 1px solid; border-right: 1px solid;padding-top: 3%;"> 
    <div>
        <h1 class="" style="cursor:pointer;"> <img class="carteTypes" style="width:unset;height: 2VH;"src="../public/assets/img/icone/creature.png" alt=""> </h1>
    
        <div class="contenu wrapperTypes">              
            <?php foreach ($allCards as $creature): ?>
                <?php if($creature->getType()=="Creature"):?>
                        <div class="cards">
                            <a href="<?= $router->generate('details-collect',['type'=>$creature->getType(),'id'=> $creature->getId()]) ?>">
                            <img class="carteTypes" src="../public/assets/img/Creature/<?= $creature->getPicture() ?>.jpg" alt="">
                            </a>
                            <div><?= $creature->getName() ?> </div>
                        </div>
                        <?php endif?>                
            <?php endforeach ?>
        </div>
    </div>

    <div>
        <h1 style="cursor:pointer;"> <img class="carteTypes" style="width:unset;height: 2VH;"src="../public/assets/img/icone/ephemere.png" alt=""> </h1>
    <div class="contenu wrapperTypes">              
        <?php foreach ($allCards as $ephemere): ?>
            <?php if($ephemere->getType()=="Ephemere"):?>
                    <div class="cards">
                        <a href="<?= $router->generate('details-collect',['type'=>$ephemere->getType(),'id'=> $ephemere->getId()]) ?>">
                        <img class="carteTypes" src="../public/assets/img/Ephemere/<?= $ephemere->getPicture() ?>.jpg" alt="">
                        </a>
                        <div><?= $ephemere->getName() ?> </div>
                    </div>
                    <?php endif?>                
        <?php endforeach ?>
    </div>
    </div>

    <div>
        <h1 class="3h1Type" style="cursor:pointer;"> <img class="carteTypes" style="width:unset;height: 2VH;"src="../public/assets/img/icone/rituel.png" alt="">  </h1>
            <div class="contenu wrapperTypes">   
                <?php foreach ($allCards as $rituel): ?>
                    <?php if($rituel->getType()=="Rituel"):?>
                    
                    <div class="cards">
                        <a href="<?= $router->generate('details-collect',['type'=>$rituel->getType(),'id'=> $rituel->getId()]) ?>">
                        <img class="carteTypes" src="../public/assets/img/Rituel/<?= $rituel->getPicture() ?>.jpg" alt="">
                        </a>
                        <div><?= $rituel->getName() ?> </div>
                    </div>
                    <?php endif?>
                <?php endforeach ?>
            </div>
    </div>

    <div>
        <h1 class="4h1Type" style="cursor:pointer;"> <img class="carteTypes" style="width:unset;height: 2VH;"src="../public/assets/img/icone/planeswalkers.png" alt=""> </h1>
            <div class="contenu wrapperTypes">   
                    <?php foreach ($allCards as $planeswalkers): ?>
                        <?php if($planeswalkers->getType()=="Planeswalkers"):?>
                        
                        <div class="cards">
                            <a href="<?= $router->generate('details-collect',['type'=>$planeswalkers->getType(),'id'=> $planeswalkers->getId()]) ?>">
                            <img  class="carteTypes" src="../public/assets/img/Planeswalkers/<?= $planeswalkers->getPicture() ?>.jpg" alt="">
                            </a>
                            <div><?= $planeswalkers->getName() ?> </div>
                        </div>
                        <?php endif?>
                    <?php endforeach ?>
            </div>
    </div>

    <div>
        <h1 class="5h1Type" style="cursor:pointer;"> <img class="carteTypes" style="width:unset;height: 2VH;"src="../public/assets/img/icone/enchantement.png" alt="">  </h1>
        <div class="contenu wrapperTypes">   
                <?php foreach ($allCards as $enchant): ?>
                    <?php if($enchant->getType()=="Enchantements"):?>
                    
                    <div class="cards">
                        <a href="<?= $router->generate('details-collect',['type'=>$enchant->getType(),'id'=> $enchant->getId()]) ?>">
                        <img  class="carteTypes" src="../public/assets/img/Enchantements/<?= $enchant->getPicture() ?>.jpg" alt="">
                        </a>
                        <div><?= $enchant->getName() ?> </div>
                    </div>
                    <?php endif?>
                <?php endforeach ?>
        </div>
    </div>

    <div>
        <h1 class="6h1Type" style="cursor:pointer;"> <img class="carteTypes" style="width:unset;height: 2VH;"src="../public/assets/img/icone/artefact.png" alt=""> </h1>
        <div class="contenu wrapperTypes">   
                <?php foreach ($allCards as $artefact): ?>
                    
                    <?php if($artefact->getType()=="Artefact"):?>
                    <div class="cards">
                        <a href="<?= $router->generate('details-collect',['type'=>$artefact->getType(),'id'=> $artefact->getId()]) ?>">
                        <img class="carteTypes" src="../public/assets/img/Artefact/<?= $artefact->getPicture() ?>.jpg" alt="">
                        </a>
                        <div><?= $artefact->getName() ?> </div>
                    </div>
                    <?php endif?>
                <?php endforeach ?>
            </div>
    </div>

    <div>
        <h1 class="7h1Type" style="cursor:pointer;"> <img class="carteTypes" style="width:unset;height: 2VH;"src="../public/assets/img/icone/terrain.png" alt=""> </h1>
            <div class="contenu wrapperTypes">   
                <?php foreach ($allCards as $land):?>
                    <?php if($land->getType()=="Terrain"):?>
                    
                    <div class="cards">
                        <a href="<?= $router->generate('details-collect',['type'=>$land->getType(),'id'=> $land->getId()]) ?>">
                        <img  class="carteTypes" src="../public/assets/img/terrain/<?= $land->getPicture() ?>.jpg" alt="">
                        </a>
                        <div><?= $land->getName() ?> </div>
                    </div>
                    <?php endif?>
                <?php endforeach ?>
            </div> 
    </div>
</div> 