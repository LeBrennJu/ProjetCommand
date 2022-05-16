<div class="detail">
    
    <div >
        <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
            <img class="imgGaucheDetail" src="../public/assets/img/Artefact/<?= $viewData['artefactSelect']->getPicture() ?>.jpg" alt="">
        </a>
    </div>


    <div class="wrapperDetail">
    <div class="detailName"><strong class="strongDetail">Type:</strong> <?= $viewData['artefactSelect']->getType() ?></div>
        <div class="detailName"><strong class="strongDetail">Nom:</strong> <?= $viewData['artefactSelect']->getName() ?></div>

        <div class="detailCost"><strong class="strongDetail">Coût:</strong> <?= $viewData['artefactSelect']->getConvertmanacost() ?>
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['artefactSelect']->getPicturemana() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['artefactSelect']->getPicturemana2() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['artefactSelect']->getPicturemana3() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['artefactSelect']->getPicturemana4() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['artefactSelect']->getPicturemana5() ?>.jpg" alt="">
        </div>
        

        <div class="detailTypes" class="strongDetail"><strong></strong> <?= $viewData['artefactSelect']->getType_id() ?></div>
        <div class="detailText" class="strongDetail"><strong>Texte:</strong> <?= $viewData['artefactSelect']->getTexte() ?></div>
        <div ><div class="detailFlavor" class="strongDetail"> <?= $viewData['artefactSelect']->getFlavor() ?></div></div>
        <div class="detailExtension"><strong class="strongDetail">Extension:</strong> <?= $viewData['artefactSelect']->getExtension() ?></div>
        <div class="detailRarity"><strong class="strongDetail">Rareté:</strong> <?= $viewData['artefactSelect']->getRarity() ?></div>
        <div class="detailAuthor"><strong class="strongDetail">Autheur:</strong> <?= $viewData['artefactSelect']->getAuthor() ?></div>
        <div class="detailDeck"><strong class="strongDetail">Deck:</strong> <a href="<?= $router->generate('decks-deck',['deck'=>$viewData['artefactSelect']->getDeck()]) ?>"><?= $viewData['artefactSelect']->getdeck() ?></a></div>
    </div>
</div>


