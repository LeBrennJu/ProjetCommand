<?php if($color==$i): ?>             
            <a href="<?= $router->generate ('collection-collection') ?>">
        <?php else : ?>
            <a href="<?= $router->generate('collection-order',['color'=>$i,'id'=>$cout]) ?>">
        <?php endif; ?>
        <img class="valeurMana " <?php if ($color==$i) :?> style="filter: brightness(4)"  <?php endif;?>src="../public/assets/img/couleurs/<?=$i?>.jpg" alt="">
        </a>