<!-- PHP -->
<?php $countBlack=count($black);$countCard=count($allNinja);$countArt=count($artefact);$countCreature=count($creatures);$allActive=count($allNinja);
$countOne=count($one);$countTwo=count($two);$countThree=count($three);$countFourth=count($fourth);$countFive=count($five);$countSixPlus=count($sixPlus)?>
<!-- HTML -->
<h1>
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
    <?= $paramDeck->getCommandant()?> <?php if($paramDeck->getCommandant2()!=NULL): ?>& <?= $paramDeck->getCommandant2()?>  <?php endif; ?>
</h1>

        <div class="wrapperDeck">
                
                <div class="commandant <?= $paramDeck->getName()?>" style="background-image: url(./../public/assets/img/<?= $paramDeck->getImage()?>.jpg);">
                        <div class="box">
                            <p class="click">ZOOM</p>
                            <a href="../public/assets/img/commandants/<?= $paramDeck->getCommandant()?>.jpg" data-lightbox="image-1" data-title="<?= $paramDeck->getCommandant()?>">
                            <img class="commandantImage"src="../public/assets/img/commandants/<?= $paramDeck->getCommandant()?>.jpg"></img></a>
                        </div>
                        
                        <?php if (($paramDeck->getCommandant2())!=NULL):?>
                        <div class="box">
                            <p class="click">ZOOM</p>
                            <a href="../public/assets/img/commandants/<?= $paramDeck->getCommandant2()?>.jpg" data-lightbox="image-1" data-title="<?= $paramDeck->getCommandant2()?>">
                            <img class="commandantImage"src="../public/assets/img/commandants/<?= $paramDeck->getCommandant2()?>.jpg"></img></a>
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
                
                
                
                
            <!-- /////CARTES////  -->
                <div class="wrapperTypes">
                    <?php foreach ($findDeck as $ninja): ?>           
                        <div class="cards">
                        <form class="deckForm" action="" method="POST" class="mt-5">
                            <a value="<?=$ninja->getId()?>" href="<?= $router->generate('decks-deckPost',['deck'=>$currentDeck]) ?>">
                            <div style="display:none;" class="pretty p-default pretty2"><input type="checkbox" name='id' value="<?=$ninja->getId()?>" checked /><div class="state p-danger"><label></label></div>
                        </div>
                            <input class ="btn btn-danger" value ="X" style="color: red;" type="submit" src="../public/assets/img/del.jpg">
                        </form>
                        <a>
                               <?= $ninja->getNinjacount()?>
                               <img class="carteTypes deckImg" style="padding-top:<?= $i+5 ?>%" src="../public/assets/img/<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg" alt="">                            
                               </a>
                        </div>            
                    <?php endforeach ?>
                </div> 
        </div>