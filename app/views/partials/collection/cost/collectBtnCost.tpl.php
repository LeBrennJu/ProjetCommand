<?php if($cout==$i && $color =="" ): ?>             
            <a href="<?= $router->generate ('collection-collection') ?>">
        <?php endif; ?>
        <?php if($cout==$i && $color !="" ): ?>  
            <a href="<?= $router->generate('collection-order',['color'=>$color,'id'=>$i]) ?>">
        <?php endif; ?>
        <?php if($cout!=$i && $color =="" ): ?>
            <a href="<?= $router->generate('collection-cost',['id'=>$i]) ?>">
        <?php endif; ?>
        <img class="valeurMana <?=$i?>" <?php if ($cout==$i) :?> style="filter: brightness(4)"  <?php endif;?> src="../public/assets/img/valeurmana/<?=$i?>.jpg" alt="">
        </a>