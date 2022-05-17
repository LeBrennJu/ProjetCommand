    <div class="globalDetail" style="background-color: #00000099;"> 
        
        <div class="detail" style="flex-wrap:wrap;flex-direction: column;align-content: space-around">
        <div style="width:100%;background-color: #ff000029;height: 2%;padding-top: 1%;margin-top: 1vh;border-bottom: 1px solid;border-top: 1px solid;"></div>
        <div style="width:50%"></div>
        <div style="width:50%"></div>
            <div style="display: flex;justify-content: center;margin-bottom: 1%;margin-top: 1%;">
                <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
                    <img class="imgGaucheDetail" src="../public/assets/img/<?= $selectCard->getType() ?>/<?= $selectCard->getPicture() ?>.jpg" alt="">
                </a>
            </div>
            <div class="wrapperDetail">
                <div class="detailName"><strong  class="strongDetail">Type:</strong> <?= $selectCard->getType() ?> <a href="<?= $router->generate('types-tribal',['tribut'=> $selectCard->getTribut()]) ?>"><?= $selectCard->getTribut() ?></a><a href="<?= $router->generate('types-tribal',['tribut'=> $selectCard->getTribut2()]) ?>"> <?= $selectCard->getTribut2() ?></a><?= $selectCard->getKey_comp() ?> </div>
                <div class="detailName"><strong class="strongDetail">Nom:</strong> <?= $selectCard->getName() ?></div>
                <?php if($selectCard->getConvertmanacost()!=""):?>
                <div class="detailCost"><strong class="strongDetail">Coût:</strong> <?=$selectCard->getConvertmanacost() ?></div>
                <?php endif;?>
                <div class="detailText"><strong class="strongDetail">Texte:</strong> <?= $selectCard->getTexte() ?></div>
                <div><div class="detailFlavor"> <?= $selectCard->getFlavor() ?></div></div>
                <div class="detailExtension"><strong class="strongDetail">Extension:</strong> <?= $selectCard->getExtension() ?></div>
                <div class="detailRarity"><strong class="strongDetail">Rareté:</strong> <?= $selectCard->getRarity() ?></div>
                <div class="detailAuthor"><strong class="strongDetail">Autheur:</strong> <?= $selectCard->getAuthor() ?></div>
                <div class="detailDeck"><strong class="strongDetail">Deck:</strong> <a href="<?= $router->generate('decks-deck',['deck'=>$selectCard->getDeck()]) ?>"><?= $selectCard->getdeck() ?></a></div>
            </div>
        </div>


        <div class="container my-4 wrapperAdd" style="position: absolute;top: 9%;background-color:unset;">
           
                
                
        <?php if(isset($_SESSION['connectedUser'])): ?>
        <div class="wrapperDeckList" style="flex-wrap: wrap;display: flex;justify-content:space-evenly;flex-direction: row-reverse;list-style-type: auto;width:10%;margin-top: 4%;">
                    <div  class="detailDivAdd"style="overflow-y:scroll;display:inline-block;height: 36vh;margin-top:1%;;width: 15vh;position: fixed;margin-left: 7%;;">
                            <?php foreach ($listeDeck as $ninja): ?>      
                            <div class="cardListDeck detailDivAdd" style="flex-wrap:unset;display:flex;position:relative;background-image:  url(../public/assets/img/commandants/<?= $ninja->getCommandant() ?>.jpg);height: 6%;background-size:45vh">
                            

                                <div class="nameDeckList" id="<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg"style="display:inline-flex;margin-left:10%;justify-content:space-around;font-size:small;color:white;">
                                <div>
                                <?= $ninja->getName()?>
                                </div>
                                <div>
                                    <img class="imgDetail" src="../public/assets/img/couleurs/<?= $ninja->getColor1()?>.jpg" alt="">
                                <?php if (($ninja->getColor2())!=NULL):?>
                                    <img class="imgDetail" src="../public/assets/img/couleurs/<?= $ninja->getColor2()?>.jpg" alt="">
                                <?php endif; ?>
                                <?php if (($ninja->getColor3())!=NULL):?> 
                                    <img class="imgDetail" src="../public/assets/img/couleurs/<?= $ninja->getColor3()?>.jpg" alt="">
                                <?php endif; ?>
                                <?php if (($ninja->getColor4())!=NULL):?> 
                                    <img class="imgDetail" src="../public/assets/img/couleurs/<?= $ninja->getColor4()?>.jpg" alt="">
                                <?php endif; ?>
                                <?php if (($ninja->getColor5())!=NULL):?> 
                                    <img class="imgDetail" src="../public/assets/img/couleurs/<?= $ninja->getColor5()?>.jpg" alt="">                    
                                <?php endif; ?>
                                </div>
                            </div>
                                <div style="display:inline-block;position:absolute;right:20px;"><?= $ninja->getconvertManacost() ?></div>
                                
                                
                                    <div>
                                        
                                        <form action="" method="POST">
                                            <div style="display:none;" class="pretty p-default pretty2"><input type="checkbox" name='deck' value="<?=$ninja->getName()?>" checked /><div class="state p-danger"><label></label></div></div>                        
                                            
                                            <input  value ="<?= $ninja->getId() ?>" style="display:none" type="checkbox" name="id"src="../public/assets/img/del.jpg" checked></input>
                                            <input class ="btn btn-danger" value ="Add" style="font-size:xx-small;color: red;bottom: -8px; left: -10px" type="submit" src="../public/assets/img/del.jpg"></input></form>
                                    </div>                                                      
                            </div>  
                              <div class="contenu">COUCOUCOUCOUCOU</div>  
                            <?php endforeach ?>
                    </div>
                </div>
        <?php endif ?>
    </div>                                 
