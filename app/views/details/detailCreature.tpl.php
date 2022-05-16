<div class="detail">
    <div >
        <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
            <img class="imgGaucheDetail" src="../public/assets/img/Creature/<?= $viewData['creatureSelect']->getPicture() ?>.jpg" alt="">
        </a>
    </div>
    <div class="wrapperDetail">
    <div class="detailName"><strong  class="strongDetail">Type:</strong> <?= $viewData['creatureSelect']->getType() ?>: <a href="<?= $router->generate('types-tribal',['tribut'=> $viewData['creatureSelect']->getTribut()]) ?>"><?= $viewData['creatureSelect']->getTribut() ?></a><a href="<?= $router->generate('types-tribal',['tribut'=> $viewData['creatureSelect']->getTribut2()]) ?>"> <?= $viewData['creatureSelect']->getTribut2() ?></a> </div>
        <div class="detailName"><strong class="strongDetail">Nom:</strong> <?= $viewData['creatureSelect']->getName() ?></div>

        <div class="detailCost"><strong class="strongDetail">Coût:</strong> <?= $viewData['creatureSelect']->getConvertmanacost() ?>
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['creatureSelect']->getPicturemana() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['creatureSelect']->getPicturemana2() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['creatureSelect']->getPicturemana3() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['creatureSelect']->getPicturemana4() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['creatureSelect']->getPicturemana5() ?>.jpg" alt="">
        </div>
        

        <div class="detailTypes"><strong></strong> <?= $viewData['creatureSelect']->getType_id() ?></div>
        <div class="detailText"><strong class="strongDetail">Texte:</strong> <?= $viewData['creatureSelect']->getTexte() ?></div>
        <div ><div class="detailFlavor"> <?= $viewData['creatureSelect']->getFlavor() ?></div></div>
        <div class="detailExtension"><strong class="strongDetail">Extension:</strong> <?= $viewData['creatureSelect']->getExtension() ?></div>
        <div class="detailRarity"><strong class="strongDetail">Rareté:</strong> <?= $viewData['creatureSelect']->getRarity() ?></div>
        <div class="detailAuthor"><strong class="strongDetail">Autheur:</strong> <?= $viewData['creatureSelect']->getAuthor() ?></div>
        <div class="detailDeck"><strong class="strongDetail">Deck:</strong> <a href="<?= $router->generate('decks-deck',['deck'=>$viewData['creatureSelect']->getDeck()]) ?>"><?= $viewData['creatureSelect']->getdeck() ?></a></div>
    </div>
</div>