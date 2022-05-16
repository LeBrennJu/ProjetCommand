<div class="detail">
    
    <div >
        <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
            <img class="imgGaucheDetail" src="../public/assets/img/enchantements/<?= $viewData['enchantSelect']->getPicture() ?>.jpg" alt="">
        </a>
    </div>
    <div class="wrapperDetail">
    <div class="detailName"><strong class="strongDetail">Type:</strong> <?= $viewData['enchantSelect']->getType() ?></div>
        <div class="detailName"><strong class="strongDetail">Nom:</strong> <?= $viewData['enchantSelect']->getName() ?></div>

        <div class="detailCost"><strong class="strongDetail">Coût:</strong> <?= $viewData['enchantSelect']->getConvertmanacost() ?>
        </div>
        

        <div class="detailTypes"><strong></strong> <?= $viewData['enchantSelect']->getType_id() ?></div>
        <div class="detailText"><strong class="strongDetail">Texte:</strong> <?= $viewData['enchantSelect']->getTexte() ?></div>
        <div ><div class="detailFlavor"> <?= $viewData['enchantSelect']->getFlavor() ?></div></div>
        <div class="detailExtension"><strong class="strongDetail">Extension:</strong> <?= $viewData['enchantSelect']->getExtension() ?></div>
        <div class="detailRarity"><strong class="strongDetail">Rareté:</strong> <?= $viewData['enchantSelect']->getRarity() ?></div>
        <div class="detailAuthor"><strong class="strongDetail">Autheur:</strong> <?= $viewData['enchantSelect']->getAuthor() ?></div>
        <div class="detailDeck"><strong class="strongDetail">Deck:</strong> <a href="<?= $router->generate('decks-deck',['deck'=>$viewData['enchantSelect']->getDeck()]) ?>"><?= $viewData['enchantSelect']->getdeck() ?></a></div>
    </div>
</div>