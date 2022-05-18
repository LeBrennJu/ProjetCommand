<!-- PHP -->
<?php $countBlack=count($black);$countCard=count($allNinja);$countArt=count($artefact);$countCreature=count($creatures);$allActive=count($allNinja);
$countOne=count($one);$countTwo=count($two);$countThree=count($three);$countFourth=count($fourth);$countFive=count($five);$countSixPlus=count($sixPlus);dump($viewData)?>
<!-- HTML -->
<div class="testFond" style="background-color: #ff000029;height: 100%;position: absolute;width: 1%;right: 1%;border-left: 1px solid;border-right: 1px solid;"></div>
<div class="testFond" style="background-color: #ff000029;height: 100%;position: absolute;width: 1%;left: 1%;border-left: 1px solid;border-right: 1px solid;"></div>
<h1 style="margin-top:2%;background-image: url(../public/assets/img/bgGrey.jpg);display:flex;justify-content: space-around;flex-direction: row-reverse;cursor: unset;" class="titreDeck"><div>
        <?= $currentDeck ?> <img class="imgDetail" src="../public/assets/img/couleurs/<?= $paramDeck->getColor1()?>.jpg" alt="">
    <?php if (($paramDeck->getColor2())!=NULL):?>
        <img class="imgDetail" src="../public/assets/img/couleurs/<?= $paramDeck->getColor2()?>.jpg" alt="">
    <?php endif; ?>
    <?php if (($paramDeck->getColor3())!=NULL):?> 
        <img class="imgDetail" src="../public/assets/img/couleurs/<?= $paramDeck->getColor3()?>.jpg" alt="">
    <?php endif; ?>
    <?php if (($paramDeck->getColor4())!=NULL):?> 
        <img class="imgDetail" src="../public/assets/img/couleurs/<?= $paramDeck->getColor4()?>.jpg" alt="">
    <?php endif; ?>
    <?php if (($paramDeck->getColor5())!=NULL):?> 
        <img class="imgDetail" src="../public/assets/img/couleurs/<?= $paramDeck->getColor5()?>.jpg" alt="">
    <?php endif; ?>
    </div>
    <?= $paramDeck->getCommandant()?> <?php if($paramDeck->getCommandant2()!=NULL): ?>& <?= $paramDeck->getCommandant2()?>  <?php endif; ?>
</h1>

        <div class="wrapperDeck" style="justify-content:center;margin-left: 2%;margin-right: 2%;">
                
                <div class="commandant <?= $paramDeck->getName()?>" style="background-image: url(./../public/assets/img/<?= $paramDeck->getImage()?>.jpg);">
                        <div class="box">
                            <p class="click">ZOOM</p>
                            <a href="../public/assets/img/commandants/<?= $paramDeck->getCommandant()?>.jpg" data-lightbox="image-1" data-title="<?= $paramDeck->getCommandant()?>">
                            <img class="commandantImage"src="../public/assets/img/commandants/<?= $paramDeck->getCommandant()?>.jpg" style="border-radius: 1vh"></img></a>
                        </div>
                        
                        <?php if (($paramDeck->getCommandant2())!=NULL):?>
                        <div class="box">
                            <p class="click">ZOOM</p>
                            <a href="../public/assets/img/commandants/<?= $paramDeck->getCommandant2()?>.jpg" data-lightbox="image-1" data-title="<?= $paramDeck->getCommandant2()?>">
                            <img class="commandantImage"src="../public/assets/img/commandants/<?= $paramDeck->getCommandant2()?>.jpg" style="border-radius: 1vh"></img></a>
                        </div>
                        <?php endif; ?>
                    
                    <div class="barre">
                        <div class="firstBarre">
                            <div class="secondBarre" style="width:<?= $countBlack*1.62 ?>px"></div>
                            <div class="thirdBarre" style="width:<?= $countArt*1.62 ?>px"></div></div>
                        <div class="firstBarre">
                            <div class="secondBarre" style="width: <?= count($ephemeres)*1.62?>px"></div>
                            <div class="thirdBarre" style="width:<?= count($rituels)*1.62 ?>px"></div>
                            <div class="fourthBarre" style="width: <?= $countArt*1.62 ?>px"></div>
                            <div class="fiveBarre" style="width: <?= count($enchantements)*1.62 ?>px"></div>
                            <div class="sixBarreMonstre" style="width:<?= $countCreature*1.62?>px"></div>
                            <div class="sevenBarre" style="width:<?= count($planeswalkers)*1.62?>px"></div>
                        </div>
                        <div class="countCard" style="color: white;"><?= $countCard+28 ?>/100</div>                        
                    </div>

                    <div class="wrapperVariable">
                        <div class="variable1 var" style="height: <?= ($countOne)*4 ?>%"><img class="valeurManaDeck" src="../public/assets/img/valeurmana/1.jpg"></div>
                        <div class="variable2 var" style="height: <?= ($countTwo)*4 ?>%"><img class="valeurManaDeck" src="../public/assets/img/valeurmana/2.jpg"></div>
                        <div class="variable3 var" style="height: <?= ($countThree)*4 ?>%"><img class="valeurManaDeck" src="../public/assets/img/valeurmana/3.jpg"></div>
                        <div class="variable4 var" style="height: <?= ($countFourth)*4 ?>%"><img class="valeurManaDeck" src="../public/assets/img/valeurmana/4.jpg"></div>
                        <div class="variable5 var" style="height: <?= ($countFive)*4?>%"><img class="valeurManaDeck" src="../public/assets/img/valeurmana/5.jpg"></div>
                        <div class="variable6 var" style="height: <?= ($countSixPlus)*4?>%"><img class="valeurManaDeck" src="../public/assets/img/valeurmana/6+.jpg"></div>
                    </div>
                </div>
<!----------------------------------------------------------------- DECKLISTHOVERIMAGE ------------------------------------------------------------->

                <div class="wrapperDeckList" style="flex-wrap: wrap;display: flex;justify-content:space-evenly;flex-direction: row-reverse;list-style-type: auto;">
                    <div  style="overflow-y:scroll;display:inline-block;height: 36vh;margin-top:1%;;width:35vh;">
                            <?php if($creatures!=[]):?>
                            <div class="titreList" style="flex-wrap:unset;display:flex;position:relative;height: 6%;background-size:45vh;justify-content: center;background-color:#18171bde;font-size:large;">Créatures</div>
                            <?php endif ?>                            
                            <?php foreach ($findDeck as $ninja): ?> 
                                <?php if($ninja->getType()=="Creature"):?>     
                                <div class="cardListDeck" style="flex-wrap:unset;display:flex;position:relative;background-image:  url(../public/assets/img/<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg);height: 6%;background-size:45vh">
                                <div class="nameDeckList" id="<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg"style="display:inline-block;margin-left:10%;">  <?= $ninja->getName()?></div>
                                <div style="display:inline-block;position:absolute;right:20px;"><?= $ninja->getconvertManacost() ?></div>
                                <div class="rarityBall <?= $ninja->getRarity() ?>"></div>                                
                                    <div>
                                        <form class="deckForm" action="" method="POST" class="mt-5">
                                            <a value="<?=$ninja->getId()?>" href="<?= $router->generate('decks-deckPost',['deck'=>$currentDeck]) ?>">
                                            <div style="display:none;" class="pretty p-default pretty2"><input type="checkbox" name='id' value="<?=$ninja->getId()?>" checked /><div class="state p-danger"><label></label></div></div>                        
                                            <input class ="btn btn-danger" value ="X" style="color: red;bottom: -8px; left: -10px;" type="submit" src="../public/assets/img/del.jpg">
                                            </a>
                                        </form>
                                    </div>                                                      
                            </div>  
                            <?php endif?>                                
                            <?php endforeach ?>
                            <?php if($ephemeres!=[]):?>
                            <div class=" titreList" style="flex-wrap:unset;display:flex;position:relative;height: 6%;background-size:45vh;justify-content: center;background-color:#18171bde;font-size:large">Ephémères</div>
                            <?php endif ?>                            
                            <?php foreach ($findDeck as $ninja): ?> 
                                <?php if($ninja->getType()=="Ephemere"):?>     
                                <div class="cardListDeck" style="flex-wrap:unset;display:flex;position:relative;background-image:  url(../public/assets/img/<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg);height: 6%;background-size:45vh">
                                <div class="nameDeckList" id="<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg"style="display:inline-block;margin-left:10%;">  <?= $ninja->getName()?></div>
                                <div style="display:inline-block;position:absolute;right:20px;"><?= $ninja->getconvertManacost() ?></div>
                                <div class="rarityBall <?= $ninja->getRarity() ?>"></div>                                
                                    <div>
                                        <form class="deckForm" action="" method="POST" class="mt-5">
                                            <a value="<?=$ninja->getId()?>" href="<?= $router->generate('decks-deckPost',['deck'=>$currentDeck]) ?>">
                                            <div style="display:none;" class="pretty p-default pretty2"><input type="checkbox" name='id' value="<?=$ninja->getId()?>" checked /><div class="state p-danger"><label></label></div></div>                        
                                            <input class ="btn btn-danger" value ="X" style="color: red;bottom: -8px; left: -10px;" type="submit" src="../public/assets/img/del.jpg">
                                            </a>
                                        </form>
                                    </div>                                                      
                            </div>  
                            <?php endif?>                                
                            <?php endforeach ?>
                            <?php if($rituels!=[]):?>
                            <div class="titreList" style="flex-wrap:unset;display:flex;position:relative;height: 6%;background-size:45vh;justify-content: center;background-color:#18171bde;font-size:large">Rituels</div>   
                            <?php endif ?>                         
                            <?php foreach ($findDeck as $ninja): ?> 
                                <?php if($ninja->getType()=="Rituel"):?>     
                                <div class="cardListDeck" style="flex-wrap:unset;display:flex;position:relative;background-image:  url(../public/assets/img/<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg);height: 6%;background-size:45vh">
                                <div class="nameDeckList" id="<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg"style="display:inline-block;margin-left:10%;">  <?= $ninja->getName()?></div>
                                <div style="display:inline-block;position:absolute;right:20px;"><?= $ninja->getconvertManacost() ?></div>
                                <div class="rarityBall <?= $ninja->getRarity() ?>"></div>                                
                                    <div>
                                        <form class="deckForm" action="" method="POST" class="mt-5">
                                            <a value="<?=$ninja->getId()?>" href="<?= $router->generate('decks-deckPost',['deck'=>$currentDeck]) ?>">
                                            <div style="display:none;" class="pretty p-default pretty2"><input type="checkbox" name='id' value="<?=$ninja->getId()?>" checked /><div class="state p-danger"><label></label></div></div>                        
                                            <input class ="btn btn-danger" value ="X" style="color: red;bottom: -8px; left: -10px;" type="submit" src="../public/assets/img/del.jpg">
                                            </a>
                                        </form>
                                    </div>                                                      
                            </div>  
                            <?php endif?>                                
                            <?php endforeach ?>
                            <?php if($enchantements!=[]):?>
                            <div class=" titreList" style="flex-wrap:unset;display:flex;position:relative;height: 6%;background-size:45vh;justify-content: center;background-color:#18171bde;font-size:large">Enchantements</div>   
                            <?php endif ?>                         
                            <?php foreach ($findDeck as $ninja): ?> 
                                <?php if($ninja->getType()=="Enchantements"):?>     
                                <div class="cardListDeck" style="flex-wrap:unset;display:flex;position:relative;background-image:  url(../public/assets/img/<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg);height: 6%;background-size:45vh">
                                <div class="nameDeckList" id="<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg"style="display:inline-block;margin-left:10%;">  <?= $ninja->getName()?></div>
                                <div style="display:inline-block;position:absolute;right:20px;"><?= $ninja->getconvertManacost() ?></div>
                                <div class="rarityBall <?= $ninja->getRarity() ?>"></div>                                
                                    <div>
                                        <form class="deckForm" action="" method="POST" class="mt-5">
                                            <a value="<?=$ninja->getId()?>" href="<?= $router->generate('decks-deckPost',['deck'=>$currentDeck]) ?>">
                                            <div style="display:none;" class="pretty p-default pretty2"><input type="checkbox" name='id' value="<?=$ninja->getId()?>" checked /><div class="state p-danger"><label></label></div></div>                        
                                            <input class ="btn btn-danger" value ="X" style="color: red;bottom: -8px; left: -10px;" type="submit" src="../public/assets/img/del.jpg">
                                            </a>
                                        </form>
                                    </div>                                                      
                            </div>  
                            <?php endif?>                                
                            <?php endforeach ?>
                            <?php if($planeswalkers!=[]):?> 
                            <div class="titreList" style="flex-wrap:unset;display:flex;position:relative;height: 6%;background-size:45vh;justify-content: center;background-color:#18171bde;font-size:large">Planeswalkers</div> 
                            <?php endif ?>                           
                            <?php foreach ($findDeck as $ninja): ?> 
                                <?php if($ninja->getType()=="Planeswalkers"):?>     
                                <div class="cardListDeck" style="flex-wrap:unset;display:flex;position:relative;background-image:  url(../public/assets/img/<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg);height: 6%;background-size:45vh">
                                <div class="nameDeckList" id="<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg"style="display:inline-block;margin-left:10%;">  <?= $ninja->getName()?></div>
                                <div style="display:inline-block;position:absolute;right:20px;"><?= $ninja->getconvertManacost() ?></div>
                                <div class="rarityBall <?= $ninja->getRarity() ?>"></div>                                
                                    <div>
                                        <form class="deckForm" action="" method="POST" class="mt-5">
                                            <a value="<?=$ninja->getId()?>" href="<?= $router->generate('decks-deckPost',['deck'=>$currentDeck]) ?>">
                                            <div style="display:none;" class="pretty p-default pretty2"><input type="checkbox" name='id' value="<?=$ninja->getId()?>" checked /><div class="state p-danger"><label></label></div></div>                        
                                            <input class ="btn btn-danger" value ="X" style="color: red;bottom: -8px; left: -10px;" type="submit" src="../public/assets/img/del.jpg">
                                            </a>
                                        </form>
                                    </div>                                                      
                            </div>  
                            <?php endif?>                                
                            <?php endforeach ?>
                            <?php if($artefact!=[]):?>
                            <div class="titreList" style="flex-wrap:unset;display:flex;position:relative;height: 6%;background-size:45vh;justify-content: center;background-color:#18171bde;font-size:large">Artefacts</div> 
                            <?php endif ?>                           
                            <?php foreach ($findDeck as $ninja):?> 
                                <?php if($ninja->getType()=="Artefact"):?>     
                                <div class="cardListDeck" style="flex-wrap:unset;display:flex;position:relative;background-image:  url(../public/assets/img/Artefact/<?= $ninja->getPicture() ?>.jpg);height: 6%;background-size:45vh">
                                <div class="nameDeckList" id="<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg"style="display:inline-block;margin-left:10%;">  <?= $ninja->getName()?></div>
                                <div style="display:inline-block;position:absolute;right:20px;"><?= $ninja->getconvertManacost() ?></div>
                                <div class="rarityBall <?= $ninja->getRarity() ?>"></div>                                
                                    <div>
                                        <form class="deckForm" action="" method="POST" class="mt-5">
                                            <a value="<?=$ninja->getId()?>" href="<?= $router->generate('decks-deckPost',['deck'=>$currentDeck]) ?>">
                                            <div style="display:none;" class="pretty p-default pretty2"><input type="checkbox" name='id' value="<?=$ninja->getId()?>" checked /><div class="state p-danger"><label></label></div></div>                        
                                            <input class ="btn btn-danger" value ="X" style="color: red;bottom: -8px; left: -10px;" type="submit" src="../public/assets/img/del.jpg">
                                            </a>
                                        </form>
                                    </div>                                                      
                            </div>  
                            <?php endif?>                                
                            <?php endforeach ?>

                            <div class="titreList" style="flex-wrap:unset;display:flex;position:relative;height: 6%;background-size:45vh;justify-content: center;background-color:#18171bde;font-size:large">Terrains</div>                            
                            <?php foreach ($findDeck as $ninja): ?> 
                                <?php if($ninja->getType()=="Terrain"):?>     
                                <div class="cardListDeck" style="flex-wrap:unset;display:flex;position:relative;background-image:  url(../public/assets/img/<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg);height: 6%;background-size:45vh">
                                <div class="nameDeckList" id="<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg"style="display:inline-block;margin-left:10%;">  <?= $ninja->getName()?></div>
                                <div style="display:inline-block;position:absolute;right:20px;"><?= $ninja->getconvertManacost() ?></div>
                                <div class="rarityBall <?= $ninja->getRarity() ?>"></div>                                
                                    <div>
                                        <form class="deckForm" action="" method="POST" class="mt-5">
                                            <a value="<?=$ninja->getId()?>" href="<?= $router->generate('decks-deckPost',['deck'=>$currentDeck]) ?>">
                                            <div style="display:none;" class="pretty p-default pretty2"><input type="checkbox" name='id' value="<?=$ninja->getId()?>" checked /><div class="state p-danger"><label></label></div></div>                        
                                            <input class ="btn btn-danger" value ="X" style="color: red;bottom: -8px; left: -10px;" type="submit" src="../public/assets/img/del.jpg">
                                            </a>
                                        </form>
                                    </div>                                                      
                            </div>  
                            <?php endif?>                                
                            <?php endforeach ?>
                            
                    </div>
             </div>   
                
                
                
            <!---------------------------------------------------------------------------------- /////CARTESMANUSCRIT//// ------------------------------------------------------------------------------------------------- -->       




                            <div class="galleryDeckList" style="height:30%;margin-top: 1%;margin-left: 1%;display: flex;flex-wrap: wrap;justify-content: space-around;">
                                <img class="galleryDeckImg"  style="height:36vh;width:24vh;background-repeat: no-repeat;background-size: contain;background-position: center;border-radius: 5%"></img>
                            </div>

                            <div class="listDeckManuscrit" style="width:70%;line-height:2VH;height:30vh;list-style-type: none;">

                                <DIV style="box-sizing: border-box;width:100%" >
                                    <h4><img class="carteTypes" style="width:unset;height: 3VH;"src="../public/assets/img/icone/creature.png" alt=""> x<?= $countCreature?></h4>
                                    <DIV style="box-sizing: border-box;" class="liCrea">
                                        <?php foreach ($findDeck as $card):?>
                                            <?php if ($card->getType()=="Creature"):?>
                                            <li class="listManuscrit"> <div class="rarityBall <?= $card->getRarity() ?>" style="position:unset"> </div>  <?= $card->getName()?> <div class="detailDeck"style ="width:1vh;display:inline-flex;"><?= $card->getconvertManacost() ?></div></li>
                                            <?php endif?>
                                        <?php endforeach ?>
                                    </DIV>
                                </div>



                                <div style="box-sizing: border-box;width:100%" >   
                                    <h4><img class="carteTypes" style="width:unset;height: 3VH;"src="../public/assets/img/icone/ephemere.png" alt=""> x<?= count($ephemeres)?></h4>
                                    <div style="box-sizing: border-box;" class="liCrea">
                                    <?php foreach ($findDeck as $card):?>
                                            <?php if ($card->getType()=="Ephemere"):?>
                                            <li class="listManuscrit" style="margin-right:1%"><div class="rarityBall <?= $card->getRarity() ?>" style="position:unset"> </div> <?= $card->getName()?> <div class="detailDeck"style ="width:1vh;display:inline-flex;"><?= $card->getconvertManacost() ?></div></li>
                                            <?php endif?>
                                        <?php endforeach ?> 
                                    </div>
                                </div>



                                <div style="box-sizing: border-box;width:100%;" >   
                                    <h4><img class="carteTypes" style="width:unset;height: 3VH;"src="../public/assets/img/icone/rituel.png" alt="">  x<?= count($rituels) ?></h4>
                                    <div style="box-sizing: border-box;" class="liCrea">
                                    <?php foreach ($findDeck as $card):?>
                                            <?php if ($card->getType()=="Rituel"):?>
                                            <li class="listManuscrit"><div class="rarityBall <?= $card->getRarity() ?>" style="position:unset"> </div> <?= $card->getName()?> <div class="detailDeck"style ="width:1vh;display:inline-flex;"><?= $card->getconvertManacost() ?></div></li>
                                            <?php endif?>
                                        <?php endforeach ?>
                                    </div>
                                </div>



                                <div style="box-sizing: border-box;width:100%" >   
                                    <h4><img class="carteTypes" style="width:unset;height: 3VH;"src="../public/assets/img/icone/artefact.png" alt="">  x<?= $countArt?></h4>
                                    <div style="box-sizing: border-box;" class="liCrea">
                                    <?php foreach ($findDeck as $card):?>
                                            <?php if ($card->getType()=="Artefact"):?>
                                            <li class="listManuscrit"> <div class="rarityBall <?= $card->getRarity() ?>" style="position:unset"></div>  <?= $card->getName()?> <div class="detailDeck"style ="width:1vh;display:inline-flex;"><?= $card->getconvertManacost() ?></div></li>
                                            <?php endif?>
                                        <?php endforeach ?>
                                    </div>
                                </div>



                                <div style="box-sizing: border-box;width:100%" >   
                                    <h4><img class="carteTypes" style="width:unset;height: 3VH;"src="../public/assets/img/icone/enchantement.png" alt=""> x<?= count($enchantements)?></h4>
                                    <div style="box-sizing: border-box;" class="liCrea">
                                    <?php foreach ($findDeck as $card):?>
                                            <?php if ($card->getType()=="Enchantements"):?>
                                            <li class="listManuscrit"> <div class="rarityBall <?= $card->getRarity() ?>" style="position:unset"> </div><?= $card->getName()?><div class="detailDeck"style ="width:1vh;display:inline-flex;"> <?= $card->getconvertManacost() ?></div></li>
                                            <?php endif?>
                                        <?php endforeach ?>
                                    </div>
                                </div>

                                <div style="box-sizing: border-box;width:100%" >   
                                    <h4><img class="carteTypes" style="width:unset;height: 3VH;"src="../public/assets/img/icone/planeswalkers.png" alt=""> x<?= count($planeswalkers)?></h4>
                                    <div style="box-sizing: border-box;" class="liCrea">
                                    <?php foreach ($findDeck as $card):?>
                                            <?php if ($card->getType()=="Planeswalkers"):?>
                                            <li class="listManuscrit"> <div class="rarityBall <?= $card->getRarity() ?>" style="position:unset"> </div><?= $card->getName()?><div class="detailDeck"style ="width:1vh;display:inline-flex;"> <?= $card->getconvertManacost() ?></div></li>
                                            <?php endif?>
                                        <?php endforeach ?>
                                    </div>
                                </div>


                                <div style="box-sizing: border-box;width:100%" >   
                                    <h4><img class="carteTypes" style="width:unset;height: 3VH;"src="../public/assets/img/icone/terrain.png" alt=""> </h4>
                                    <div style="box-sizing: border-box" class="liCrea">
                                    <?php foreach ($findDeck as $card):?>
                                            <?php if ($card->getType()=="Terrain"):?>
                                            <li class="listManuscrit"> <div class="rarityBall <?= $card->getRarity() ?>" style="position:unset"> </div> <?= $card->getName()?><div class="detailDeck"style ="width:1vh;display:inline-flex;"> <?= $card->getconvertManacost() ?></div></li>
                                            <?php endif?>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>

            </div>

<!------------------------------------------------------------------------------------------- DECKLIST BLACK  --------------------------------------------------------------------------------------->

            
<div style="font: 0.625rem arial, sans-serif;color: #fff;width: 195px;background-color: rgba(0, 0, 0, 0.5);border-collapse: collapse;border-radius: 4px;position: absolute;left: 48%;top:124%">
    <table style="width: 100%;">
        <thead style="">
            <!-- <------------------COMMANDANTS------------------> 
        <tr style="border-bottom: 1px solid rgba(169,169,169,0.2);box-shadow: rgb(255 106 0 / 44%) 0px 0px 5px;margin-bottom: 8px;">
                <td class="color<?= $paramDeck->getColor_id() ?>" style="width: 32px;padding:2px;white-space:nowrap;"><div style="background-image:  url(../public/assets/img/commandants/<?= $paramDeck->getCommandant() ?>.jpg);width: 30px;height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="padding-left: 2px;width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><?= $paramDeck->getNamecommandant() ?> <?= $paramDeck->getConvertmanacostcommandant() ?> </div></td>
                <td class="<?= $paramDeck->getRarity() ?>"style="width: 38px; text-align: center;background-color:#18171bde;border-left:1px solid"><div>1</div></td>
            </tr>
                                                <!-- <-----------------TYPES-----------> 
            <!-- <-----------CREATURE--------------> 
            <?php if($creatures!=[]) :?>
            <tr style>
                <td style="width: 32px;padding:0;white-space:nowrap;"><div style="background-image:  url(../public/assets/img/bgGrey.jpg);height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="background-image:  url(../public/assets/img/bgGrey.jpg);width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><img style="margin-left: 40%;width: 24px;height: 26px;"src="../public/assets/img/icone/creature.png"  alt=""> </div></td>
                <td class style="width: 38px; text-align: center;background-image:  url(../public/assets/img/bgGrey.jpg);border-right:unset"><div></div></td>
            </tr>
            <?php endif ?>
        <?php foreach ($findDeck as $card):?>
             <?php if($card->getType()=="Creature"): ?>
            <tr style="border-bottom: 1px solid rgba(169,169,169,0.2);">
            
                <td class="color<?= $card->getColor_id() ?>"style="width: 32px;padding:2px;white-space:nowrap;padding-bottom:unset"><div style="box-sizing:border-box;background-image:  url(../public/assets/img/<?= $card->getType() ?>/<?= $card->getPicture() ?>.jpg);width: 30px;height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="padding-left: 2px;width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><?= $card->getName() ?> <?= $card->getconvertManacost() ?> </div></td>
                <td class="<?= $card->getRarity() ?>"style="width: 38px; text-align: center;background-color:#18171bde;border-left:1px solid"><div><?php if($card->getNinjacount()!=""): echo $card->getNinjacount() ?><?php else :?>1<?php endif;?></div></td>
            
            </tr>
            <?php endif; ?>
            <?php endforeach ?>
            <!-- <-----------EPHEMERE--------------> 
            <?php if($ephemeres!=[]) :?>
            <tr style>
                <td style="width: 32px;padding:0;white-space:nowrap;"><div style="background-image:  url(../public/assets/img/bgGrey.jpg);height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="background-image:  url(../public/assets/img/bgGrey.jpg);width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><img style="margin-left: 40%;width: 24px;height: 26px;"src="../public/assets/img/icone/ephemere.png"  alt=""> </div></td>
                <td class style="width: 38px; text-align: center;background-image:  url(../public/assets/img/bgGrey.jpg);border-right:unset"><div></div></td>
            </tr>
            <?php endif ?>
        <?php foreach ($findDeck as $card):?>
             <?php if($card->getType()=="Ephemere"): ?>
            <tr style="border-bottom: 1px solid rgba(169,169,169,0.2);">
            
                <td class="color<?= $card->getColor_id() ?>"style="width: 32px;padding:2px;white-space:nowrap;padding-bottom:unset"><div style="box-sizing:border-box;background-image:  url(../public/assets/img/<?= $card->getType() ?>/<?= $card->getPicture() ?>.jpg);width: 30px;height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="padding-left: 2px;width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><?= $card->getName() ?> <?= $card->getconvertManacost() ?> </div></td>
                <td class="<?= $card->getRarity() ?>"style="width: 38px; text-align: center;background-color:#18171bde;border-left:1px solid"><div><?php if($card->getNinjacount()!=""): echo $card->getNinjacount() ?><?php else :?>1<?php endif;?></div></td>
            
            </tr>
            <?php endif; ?>
            <?php endforeach ?>
            <!-- <-----------RITUELS--------------> 
            <?php if($rituels!=[]) :?>
            <tr style>
                <td style="width: 32px;padding:0;white-space:nowrap;"><div style="background-image:  url(../public/assets/img/bgGrey.jpg);height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="background-image:  url(../public/assets/img/bgGrey.jpg);width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><img style="margin-left: 40%;width: 24px;height: 26px;"src="../public/assets/img/icone/rituel.png"  alt=""> </div></td>
                <td class style="width: 38px; text-align: center;background-image:  url(../public/assets/img/bgGrey.jpg);border-right:unset"><div></div></td>
            </tr>
           <?php endif ?>
        <?php foreach ($findDeck as $card):?>
             <?php if($card->getType()=="Rituel"): ?>
            <tr style="border-bottom: 1px solid rgba(169,169,169,0.2);">
            
                <td class="color<?= $card->getColor_id() ?>"style="width: 32px;padding:2px;white-space:nowrap;padding-bottom:unset"><div style="box-sizing:border-box;background-image:  url(../public/assets/img/<?= $card->getType() ?>/<?= $card->getPicture() ?>.jpg);width: 30px;height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="padding-left: 2px;width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><?= $card->getName() ?> <?= $card->getconvertManacost() ?> </div></td>
                <td class="<?= $card->getRarity() ?>"style="width: 38px; text-align: center;background-color:#18171bde;border-left:1px solid"><div><?php if($card->getNinjacount()!=""): echo $card->getNinjacount() ?><?php else :?>1<?php endif;?></div></td>
            
            </tr>
            <?php endif; ?>
            <?php endforeach ?>
            <!-- <-----------ENCHANTEMENTS--------------> 
            <?php if($enchantements!=[]) :?>
            <tr style>
                <td style="width: 32px;padding:0;white-space:nowrap;"><div style="background-image:  url(../public/assets/img/bgGrey.jpg);height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="background-image:  url(../public/assets/img/bgGrey.jpg);width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><img style="margin-left: 40%;width: 24px;height: 26px;"src="../public/assets/img/icone/enchantement.png"  alt=""> </div></td>
                <td class style="width: 38px; text-align: center;background-image:  url(../public/assets/img/bgGrey.jpg);border-right:unset"><div></div></td>
            </tr>
            <?php endif ?>
        <?php foreach ($findDeck as $card):?>
             <?php if($card->getType()=="Enchantements"): ?>
            <tr style="border-bottom: 1px solid rgba(169,169,169,0.2);">
            
                <td class="color<?= $card->getColor_id() ?>"style="width: 32px;padding:2px;white-space:nowrap;padding-bottom:unset"><div style="box-sizing:border-box;background-image:  url(../public/assets/img/<?= $card->getType() ?>/<?= $card->getPicture() ?>.jpg);width: 30px;height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="padding-left: 2px;width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><?= $card->getName() ?> <?= $card->getconvertManacost() ?> </div></td>
                <td class="<?= $card->getRarity() ?>"style="width: 38px; text-align: center;background-color:#18171bde;border-left:1px solid"><div><?php if($card->getNinjacount()!=""): echo $card->getNinjacount() ?><?php else :?>1<?php endif;?></div></td>
            
            </tr>
            <?php endif; ?>
            <?php endforeach ?>
            <!-- <-----------PLANESWALKERS--------------> 
            <?php if($planeswalkers!=[]) :?>
            <tr style>
                <td style="width: 32px;padding:0;white-space:nowrap;"><div style="background-image:  url(../public/assets/img/bgGrey.jpg);height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="background-image:  url(../public/assets/img/bgGrey.jpg);width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><img style="margin-left: 40%;width: 24px;height: 26px;"src="../public/assets/img/icone/planeswalkers.png"  alt=""> </div></td>
                <td class style="width: 38px; text-align: center;background-image:  url(../public/assets/img/bgGrey.jpg);border-right:unset"><div></div></td>
            </tr>
           <?php endif ?>
        <?php foreach ($findDeck as $card):?>
             <?php if($card->getType()=="Planeswalkers"): ?>
            <tr style="border-bottom: 1px solid rgba(169,169,169,0.2);">
            
                <td class="color<?= $card->getColor_id() ?>"style="width: 32px;padding:2px;white-space:nowrap;padding-bottom:unset"><div style="box-sizing:border-box;background-image:  url(../public/assets/img/<?= $card->getType() ?>/<?= $card->getPicture() ?>.jpg);width: 30px;height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="padding-left: 2px;width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><?= $card->getName() ?> <?= $card->getconvertManacost() ?> </div></td>
                <td class="<?= $card->getRarity() ?>"style="width: 38px; text-align: center;background-color:#18171bde;border-left:1px solid"><div><?php if($card->getNinjacount()!=""): echo $card->getNinjacount() ?><?php else :?>1<?php endif;?></div></td>
            
            </tr>
            <?php endif; ?>
            <?php endforeach ?>
            <!-- <-----------ARTEFACTS--------------> 
            <?php if($artefact!=[]) :?>
            <tr style>
                <td style="width: 32px;padding:0;white-space:nowrap;"><div style="background-image:  url(../public/assets/img/bgGrey.jpg);height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="background-image:  url(../public/assets/img/bgGrey.jpg);width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><img style="margin-left: 40%;width: 24px;height: 26px;"src="../public/assets/img/icone/artefact.png"  alt=""> </div></td>
                <td class style="width: 38px; text-align: center;background-image:  url(../public/assets/img/bgGrey.jpg);border-right:unset"><div></div></td>
            </tr>
                <?php endif ?>
        <?php foreach ($findDeck as $card):?>
             <?php if($card->getType()=="Artefact"): ?>
            <tr style="border-bottom: 1px solid rgba(169,169,169,0.2);">
            
                <td class="color<?= $card->getColor_id() ?>"style="width: 32px;padding:2px;white-space:nowrap;padding-bottom:unset"><div style="box-sizing:border-box;background-image:  url(../public/assets/img/<?= $card->getType() ?>/<?= $card->getPicture() ?>.jpg);width: 30px;height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="padding-left: 2px;width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><?= $card->getName() ?> <?= $card->getconvertManacost() ?> </div></td>
                <td class="<?= $card->getRarity() ?>"style="width: 38px; text-align: center;background-color:#18171bde;border-left:1px solid"><div><?php if($card->getNinjacount()!=""): echo $card->getNinjacount() ?><?php else :?>1<?php endif;?></div></td>
            
            </tr>
            <?php endif; ?>
            <?php endforeach ?>
            <!-- <-----------TERRAINS--------------> 
            
            <tr style>
                <td style="width: 32px;padding:0;white-space:nowrap;"><div style="background-image:  url(../public/assets/img/bgGrey.jpg);height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="background-image:  url(../public/assets/img/bgGrey.jpg);width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><img style="margin-left: 40%;width: 24px;height: 26px;"src="../public/assets/img/icone/terrain.png"  alt=""> </div></td>
                <td class style="width: 38px; text-align: center;background-image:  url(../public/assets/img/bgGrey.jpg);border-right:unset"><div></div></td>
            </tr>
           
        <?php foreach ($findDeck as $card):?>
             <?php if($card->getType()=="Terrain"): ?>
            <tr style="border-bottom: 1px solid rgba(169,169,169,0.2);">
            
                <td class="color<?= $card->getColor_id() ?>"style="width: 32px;padding:2px;white-space:nowrap;padding-bottom:unset"><div style="box-sizing:border-box;background-image:  url(../public/assets/img/<?= $card->getType() ?>/<?= $card->getPicture() ?>.jpg);width: 30px;height: 26px;background-position: top -15px left 50%;background-size: 70px 95px;"></div></td>
                <td class="deckListImg"style="padding-left: 2px;width: 123px;max-width: 123px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><div style="overflow: hidden;min-width: 0;text-overflow: ellipsis;white-space: nowrap;"><?= $card->getName() ?> <?= $card->getconvertManacost() ?> </div></td>
                <td class="<?= $card->getRarity() ?>"style="width: 38px; text-align: center;background-color:#18171bde;border-left:1px solid"><div><?php if($card->getNinjacount()!=""): echo $card->getNinjacount() ?><?php else :?>1<?php endif;?></div></td>
            
            </tr>
            <?php endif; ?>
            <?php endforeach ?>
        </thead>
    </table>
</div>

