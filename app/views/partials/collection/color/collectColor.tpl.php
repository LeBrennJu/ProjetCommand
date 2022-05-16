<?php if($color==$i && $cout==""): ?>             
            <a href="<?= $router->generate ('collection-collection') ?>">
        <?php endif; ?>
        <?php if($color!=$i && $cout !=""): ?> 
            <a href="<?= $router->generate('collection-order',['color'=>$i,'id'=>$cout]) ?>">
        <?php endif; ?>
        <?php if($color!=$i && $cout ==""): ?>
            <a href="<?= $router->generate('collection-color',['color'=>$i]) ?>">
        <?php endif; ?>  
        <img class="valeurMana " <?php if ($color==$i) :?> style="filter: brightness(4)"  <?php endif;?>src="../public/assets/img/couleurs/<?=$i?>.jpg" alt="">
        </a>