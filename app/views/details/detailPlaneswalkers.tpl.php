<div class="detail">
    
    <div >
        <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
            <img class="imgGaucheDetail" src="../public/assets/img/Planeswalkers/<?= $viewData['planeswalkersSelect']->getPicture() ?>.jpg" alt="">
        </a>
    </div>
    <div class="wrapperDetail">
    <div class="detailName"><strong  class="strongDetail">Type:</strong> <?= $viewData['planeswalkersSelect']->getType() ?></div>
        <div class="detailName"><strong class="strongDetail">Nom:</strong> <?= $viewData['planeswalkersSelect']->getName() ?></div>

        <div class="detailCost"><strong class="strongDetail">Coût:</strong> <?= $viewData['planeswalkersSelect']->getConvertmanacost() ?>
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['planeswalkersSelect']->getPicturemana() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['planeswalkersSelect']->getPicturemana2() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['planeswalkersSelect']->getPicturemana3() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['planeswalkersSelect']->getPicturemana4() ?>.jpg" alt="">
        <img class="imgDetail" src="../public/assets/img/<?= $viewData['planeswalkersSelect']->getPicturemana5() ?>.jpg" alt="">
        </div>
        

        <div class="detailTypes"><strong></strong> <?= $viewData['planeswalkersSelect']->getType_id() ?></div>
        <div class="detailText"><strong class="strongDetail">Texte:</strong> <?= $viewData['planeswalkersSelect']->getTexte() ?><br><?= $viewData['planeswalkersSelect']->getTexte2() ?><br><?= $viewData['planeswalkersSelect']->getTexte3() ?></div>
        <div ><div class="detailFlavor"> <?= $viewData['planeswalkersSelect']->getFlavor() ?></div></div>
        <div class="detailExtension"><strong class="strongDetail">Extension:</strong> <?= $viewData['planeswalkersSelect']->getExtension() ?></div>
        <div class="detailRarity"><strong class="strongDetail">Rareté:</strong> <?= $viewData['planeswalkersSelect']->getRarity() ?></div>
        <div class="detailAuthor"><strong class="strongDetail">Autheur:</strong> <?= $viewData['planeswalkersSelect']->getAuthor() ?></div>
        <div class="detailDeck"><strong class="strongDetail">Deck:</strong> <a href="<?= $router->generate('decks-deck',['deck'=>$viewData['planeswalkersSelect']->getDeck()]) ?>"><?= $viewData['planeswalkersSelect']->getdeck() ?></a></div>
    </div>
</div>