<h2><?= $tributName?></h2>
<div class="wrapperTypes">            
    <?php foreach ($tribut as $card): ?>
        
                <div class="cards">
                    <a href="<?= $router->generate('details-collect',['type'=>$card->getType(),'id'=> $card->getId()]) ?>">
                   
                    <img class="carteTypes" src="../public/assets/img/<?= $card->getType() ?>/<?= $card->getPicture() ?>.jpg" alt="">
                    </a>
                    <div><?= $card->getName() ?> </div>
                
                </div>                
    <?php endforeach ?>
</div>