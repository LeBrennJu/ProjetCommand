    <div class="globalDetail" style="background-color: #00000099;">  
        <div class="detail" style="flex-wrap:wrap;flex-direction: column;align-content: space-around">
            <div style="display: flex;justify-content: center;margin-bottom: 1%;margin-top: 1%;">
                <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
                    <img class="imgGaucheDetail" src="../public/assets/img/<?= $selectCard->getType() ?>/<?= $selectCard->getPicture() ?>.jpg" alt="">
                </a>
            </div>
            <div class="wrapperDetail">
                <div class="detailName"><strong  class="strongDetail">Type:</strong> <?= $selectCard->getType() ?> <a href="<?= $router->generate('types-tribal',['tribut'=> $selectCard->getTribut()]) ?>"><?= $selectCard->getTribut() ?></a><a href="<?= $router->generate('types-tribal',['tribut'=> $selectCard->getTribut2()]) ?>"> <?= $selectCard->getTribut2() ?></a> </div>
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


        <div class="container my-4 wrapperAdd" style="">
            <div style="width: 80%;height: 100%;">
                <form action="" method="POST" class="mt-5">
                    <label for="color1"></label>
                    <?php foreach ($listeDeck as $deck): ?>
                        <input type="checkbox" name="name" id="blanc" value="<?= $deck->getName() ?>" /> <img  style="width:20%;" src="../public/assets/img/Commandants/<?= $deck->getCommandant() ?>.jpg" alt="">
                        <?php endforeach ?>
                        
                    <br/><br/>
                        <button type="submit" class="btn btn-primary mt-5">Ajouter</button>
                </div>            
                </form>
                

                <div>
                    <?php foreach ($listeDeck as $deck): ?>
                        <div class="detailDivAdd" style="display:inline-flex;border:1px solid;border-radius:2vh;width:100%;justify-content:space-around;background-image:  url(../public/assets/img/<?= $deck->getImage() ?>.jpg)">
                        <div><?= $deck->getName() ?></div>
                            <div>
                                <img class="imgDetail" src="../public/assets/img/couleurs/<?= $deck->getColor1()?>.jpg" alt="">
                            <?php if (($deck->getColor2())!=NULL):?>
                                <img class="imgDetail" src="../public/assets/img/couleurs/<?= $deck->getColor2()?>.jpg" alt="">
                            <?php endif; ?>
                            <?php if (($deck->getColor3())!=NULL):?> 
                                <img class="imgDetail" src="../public/assets/img/couleurs/<?= $deck->getColor3()?>.jpg" alt="">
                            <?php endif; ?>
                            <?php if (($deck->getColor4())!=NULL):?> 
                                <img class="imgDetail" src="../public/assets/img/couleurs/<?= $deck->getColor4()?>.jpg" alt="">
                            <?php endif; ?>
                            <?php if (($deck->getColor5())!=NULL):?> 
                                <img class="imgDetail" src="../public/assets/img/couleurs/<?= $deck->getColor5()?>.jpg" alt="">
                            <?php endif; ?>
                            </div>
                        </div>
                        <div class="contenu">COUCOUCOUCOUCOU</div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>                                 
