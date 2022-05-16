<div class="detail">
    
    <div >
        <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
            <img class="imgGaucheDetail" src="../public/assets/img/Rituel/<?= $viewData['allRituels']->getPicture() ?>.jpg" alt="">
        </a>
    </div>
    <div class="wrapperDetail">
    <div class="detailName"><strong class="strongDetail">Type:</strong> <?= $viewData['allRituels']->getType() ?></div>
        <div class="detailName"><strong class="strongDetail">Nom:</strong> <?= $viewData['allRituels']->getName() ?></div>

        <div class="detailCost"><strong class="strongDetail">Coût:</strong> <?= $viewData['allRituels']->getConvertmanacost() ?>
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['allRituels']->getPicturemana() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['allRituels']->getPicturemana2() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['allRituels']->getPicturemana3() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['allRituels']->getPicturemana4() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['allRituels']->getPicturemana5() ?>.jpg" alt="">
        </div>
        

        <div class="detailTypes"><strong></strong> <?= $viewData['allRituels']->getType_id() ?></div>
        <div class="detailText"><strong class="strongDetail">Texte:</strong> <?= $viewData['allRituels']->getTexte() ?></div>
        <div ><div class="detailFlavor"> <?= $viewData['allRituels']->getFlavor() ?></div></div>
        <div class="detailExtension"><strong class="strongDetail">Extension:</strong> <?= $viewData['allRituels']->getExtension() ?></div>
        <div class="detailRarity"><strong class="strongDetail">Rareté:</strong> <?= $viewData['allRituels']->getRarity() ?></div>
        <div class="detailAuthor"><strong class="strongDetail">Autheur:</strong> <?= $viewData['allRituels']->getAuthor() ?></div>
        <div class="detailDeck"><strong class="strongDetail">Deck:</strong> <a href="<?= $router->generate('decks-deck',['deck'=>$viewData['allRituels']->getDeck()]) ?>"><?= $viewData['allRituels']->getdeck() ?></a></div>
    </div>
</div>