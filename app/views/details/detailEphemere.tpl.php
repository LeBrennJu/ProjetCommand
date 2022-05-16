<div class="detail">
    
    <div >
        <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
            <img class="imgGaucheDetail" src="../public/assets/img/Éphémère/<?= $viewData['ephemereSelect']->getPicture() ?>.jpg" alt="">
        </a>
    </div>
    <div class="wrapperDetail">
    <div class="detailName"><strong class="strongDetail">Type:</strong> <?= $viewData['ephemereSelect']->getType() ?></div>
        <div class="detailName"><strong class="strongDetail">Nom:</strong> <?= $viewData['ephemereSelect']->getName() ?></div>

        <div class="detailCost"><strong class="strongDetail">Coût:</strong> <?= $viewData['ephemereSelect']->getConvertmanacost() ?>
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['ephemereSelect']->getPicturemana() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['ephemereSelect']->getPicturemana2() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['ephemereSelect']->getPicturemana3() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['ephemereSelect']->getPicturemana4() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['ephemereSelect']->getPicturemana5() ?>.jpg" alt="">
        </div>
        

        <div class="detailTypes"><strong></strong> <?= $viewData['ephemereSelect']->getType_id() ?></div>
        <div class="detailText"><strong class="strongDetail">Texte:</strong> <?= $viewData['ephemereSelect']->getTexte() ?></div>
        <div ><div class="detailFlavor"> <?= $viewData['ephemereSelect']->getFlavor() ?></div></div>
        <div class="detailExtension"><strong class="strongDetail">Extension:</strong> <?= $viewData['ephemereSelect']->getExtension() ?></div>
        <div class="detailRarity"><strong class="strongDetail">Rareté:</strong> <?= $viewData['ephemereSelect']->getRarity() ?></div>
        <div class="detailAuthor"><strong class="strongDetail">Autheur:</strong> <?= $viewData['ephemereSelect']->getAuthor() ?></div>
        <div class="detailDeck"><strong class="strongDetail">Deck:</strong> <a href="<?= $router->generate('decks-deck',['deck'=>$viewData['ephemereSelect']->getDeck()]) ?>"><?= $viewData['ephemereSelect']->getdeck() ?></a></div>
    </div>
</div>