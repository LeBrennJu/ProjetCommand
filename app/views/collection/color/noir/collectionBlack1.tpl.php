<div class="triCollect">
        <a href="<?= $router->generate('collection-collectionBlack') ?>">
        <img class="valeurMana 1" style="filter: brightness(1.75)" src="../public/assets/img/valeurmana/1.jpg" alt="">
        </a>
        <a href="<?= $router->generate('collection-collectionBlack2') ?>">
        <img class="valeurMana 2" src="../public/assets/img/valeurmana/2.jpg" alt="">
        </a>
        <a href="<?= $router->generate('collection-collectionBlack3') ?>">
        <img class="valeurMana 3" src="../public/assets/img/valeurmana/3.jpg" alt="">
        </a>
        <a href="<?= $router->generate('collection-collectionBlack4') ?>">
        <img class="valeurMana 4" src="../public/assets/img/valeurmana/4.jpg" alt="">
        </a>
        <a href="<?= $router->generate('collection-collectionBlack5') ?>">
        <img class="valeurMana 5" src="../public/assets/img/valeurmana/5.jpg" alt="">
        </a>
        <a href="<?= $router->generate('collection-collectionBlack6Plus') ?>">
        <img class="valeurMana 6+"  src="../public/assets/img/valeurmana/6+.jpg" alt="">
        </a>
        <a href="<?= $router->generate('collection-collectionOne') ?>">
        <img class="valeurMana noir" style="filter: brightness(1.75)" src="../public/assets/img/couleurs/noir.jpg" alt="">
        </a>
        <a href="<?= $router->generate('collection-collectionBlue1') ?>">
        <img class="valeurMana bleu" src="../public/assets/img/couleurs/bleu.jpg" alt="">
        </a>
        <a href="<?= $router->generate('collection-collectionInco1') ?>">
        <img class="valeurMana inco"  src="../public/assets/img/couleurs/mana.jpg" alt="">
        </a>
    </div>
<div class="wrapperTypes">              
    <?php foreach ($black as $card): ?>
        
                <div class="cards">
                    <a href="<?= $router->generate('details-'.$card->getType(),['id'=> $card->getId()]) ?>">
                    <img class="carteTypes" src="../public/assets/img/<?= $card->getType() ?>/<?= $card->getPicture() ?>.jpg" alt="">
                    </a>
                    <div><?= $card->getName() ?> </div>
                
                </div>                
    <?php endforeach ?>
</div>