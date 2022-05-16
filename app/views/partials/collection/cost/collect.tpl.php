<?php if ($color==""):?>
            <a href="<?= $router->generate('collection-cost',['id'=>$i]) ?>">
        <?php else : ?>
            <a href="<?= $router->generate('collection-order',['color'=>$color,'id'=>$i]) ?>">
        <?php endif; ?> 
            <img class="valeurMana <?=$i?>" src="../public/assets/img/valeurmana/<?=$i?>.jpg" alt="">
            </a>