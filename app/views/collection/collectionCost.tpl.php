<?php $cout=$id;$color="";?>
<form action="" method="POST" style="display: flex;background-color: #00000099;margin-right:4%;margin-left:4%;border-left: 2px solid;border-right: 2px solid;border-color: #ff000029;">
    <div class="triCollect" style="display: flex;flex-direction:column;;margin-left: 3%;border: 1px solid;background-color: #ff000029; padding: 1%;border-bottom: unset;>
            <a href="<?= $router->generate('collection-collection') ?>">"
            <img class="valeurMana all" src="../public/assets/img/couleurs/oeil.jpg" alt="">
            </a>
            
            <?php for ($i=1; $i <6 ; $i++) { 
                include __DIR__ . '/../partials/collection/cost/collectBtnCost.tpl.php';
            }?>

            <?php if($cout==6 && $color =="" ): ?>             
                <a href="<?= $router->generate ('collection-collection') ?>">
            <?php endif; ?>
            <?php if($cout==6 && $color !="" ): ?>  
                <a href="<?= $router->generate('collection-order',['color'=>$color,'id'=>6]) ?>">
            <?php endif; ?>
            <?php if($cout!=6 && $color =="" ): ?>
                <a href="<?= $router->generate('collection-cost',['id'=>6]) ?>">
            <?php endif; ?>
            <img class="valeurMana 6" <?php if ($cout==6) :?> style="filter: brightness(1.75)"  <?php endif;?> src="../public/assets/img/valeurmana/6.jpg" alt="">
            </a>

            <?php for ($i=1; $i <8 ; $i++) { 
                include __DIR__ . '/../partials/collection/color/collectCost.tpl.php';
            }?>     
        </div><?php dump($cout)?>
        <div class="wrapperAllCollect" style="width:90%;box-sizing:border-box;display:flex">   
    <div class="wrapperTypes">
        <?php if($cout==6):?>            
        <?php foreach ($collectCost6Plus as $card):?>
            
                    <div class="cards">
                    <div class="pretty p-default pretty2" style="bottom:0;right:-5%" ><input type="checkbox" name='id' value="<?=$card->getId()?>" /><div class="state p-danger"><label></label></div></div>
                        <a href="<?= $router->generate('details-collect',['type'=>$card->getType(),'id'=> $card->getId()]) ?>">                    
                        <img class="carteTypes" src="../public/assets/img/<?= $card->getType() ?>/<?= $card->getPicture() ?>.jpg" alt="">
                        </a>
                    <div><?= $card->getName() ?> </div>
                    
                    </div>                
        <?php endforeach ?>
        <?php elseif($cout<6):?>
        <?php foreach ($collectCost as $card):?>
            
            <div class="cards">
            <div class="pretty p-default pretty2" style="bottom:0;right:-5%" ><input type="checkbox" name='id' value="<?=$card->getId()?>" /><div class="state p-danger"><label></label></div></div>
                <a href="<?= $router->generate('details-collect',['type'=>$card->getType(),'id'=> $card->getId()]) ?>">                    
                <img class="carteTypes" src="../public/assets/img/<?= $card->getType() ?>/<?= $card->getPicture() ?>.jpg" alt="">
                </a>
            <div><?= $card->getName() ?> </div>
            
            </div>                
<?php endforeach ?>
        <?php endif?>        
    </div>

    <?php include __DIR__ . '/../partials/collection/formCollect.tpl.php';?>
        </div>
</form>