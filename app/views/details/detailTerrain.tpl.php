
<?php dump($viewData)?>
<div class="detail">
    
    <div >
        <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>">
            <img class="imgGaucheDetail" src="../public/assets/img/Terrain/<?= $viewData['terrainSelect']->getPicture() ?>.jpg" alt="">
        </a>
    </div>
    <div class="wrapperDetail">
    <div class="detailName"><strong class="strongDetail">Type:</strong> <?= $viewData['terrainSelect']->getType() ?></div>
        <div class="detailName"><strong class="strongDetail">Nom:</strong> <?= $viewData['terrainSelect']->getName() ?></div>
        <div class="detailText"><strong class="strongDetail">Texte:</strong><div class="separateText"><?= $viewData['terrainSelect']->getTexte() ?></div></div>
        <div ><div class="detailFlavor"> <?= $viewData['terrainSelect']->getFlavor() ?></div></div>
        <div class="detailExtension"><strong class="strongDetail">Extension:</strong> <?= $viewData['terrainSelect']->getExtension() ?></div>
        <div class="detailRarity"><strong class="strongDetail">Rareté:</strong> <?= $viewData['terrainSelect']->getRarity() ?></div>
        <div class="detailAuthor"><strong class="strongDetail">Autheur:</strong> <?= $viewData['terrainSelect']->getAuthor() ?></div>
        <div class="detailDeck"><strong class="strongDetail">Deck:</strong> <a href="<?= $router->generate('decks-deck',['deck'=>$viewData['terrainSelect']->getDeck()]) ?>"><?= $viewData['terrainSelect']->getdeck() ?></a></div>
    </div>
</div>