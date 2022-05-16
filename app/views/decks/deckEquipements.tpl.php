<h1>Equipements <img class="imgDetail" src="../public/assets/img/couleurs/rouge.jpg" alt=""> <img class="imgDetail" src="../public/assets/img/couleurs/blanc.jpg" alt=""></h1>

<div class="commandantEquipements" style="cursor:pointer;"  >
    
<div class="conteneur-flexbox">
  <div class="box">
    <p class="click">Zoom</p>
        <a href="../public/assets/img/Commandants/ornstein.jpg" data-lightbox="image-1" data-title="Dragon Slayer Ornstein et Executioner Smough sont des boss dans Dark Souls.">
        <img class="commandantImage"src="../public/assets/img/Commandants/ornstein.jpg"></a>
  </div>
  
  <div class="box">
        <p class="click">Zoom</p>
        <a href="../public/assets/img/Commandants/smough.jpg" data-lightbox="image-1" data-title="Dragon Slayer Ornstein et Executioner Smough sont des boss dans Dark Souls.">
        <!--le lien vers la petite image carrée qui sert de vignette -->
      <img class="commandantImage"src="../public/assets/img/Commandants/smough.jpg"></a>
  </div>
  
</div>

    
    <div class="statsBarre">
        <div class="texteDeck"></div>
        <div class="texteDeck"></div>
    </div>

    <div class="barre">
        <div class="firstBarre equipBarreRed">
            <div class="secondBarre" style="background-color: #fdf9d4;width:20%;"></div>
            <div class="thirdBarre" style="width:20%;"></div>
        </div>

        <div class="firstBarre equipBarreRed">
            <div class="secondBarre" style="background-color: #fdf9d4;width:20%;"></div>
            <div class="thirdBarre" style="width:20%;"></div>
            <div class="fourthBarre" style="width:20%;"></div>
            <div class="fiveBarre" style="width:20%;"></div>
            <div class="sixBarreMonstre" style="background-color: #f9a98e;"></div>
        </div>
    </div>

    <div class="wrapperVariable">
        <div class="variable1 var" style=""><img class="valeurManaDeck" src="../public/assets/img/valeurmana/1.jpg"></div>
        <div class="variable2 var" style=""><img class="valeurManaDeck" src="../public/assets/img/valeurmana/2.jpg"></div>
        <div class="variable3 var" style=""><img class="valeurManaDeck" src="../public/assets/img/valeurmana/3.jpg"></div>
        <div class="variable4 var" style=""><img class="valeurManaDeck" src="../public/assets/img/valeurmana/4.jpg"></div>
        <div class="variable5 var" style=""><img class="valeurManaDeck" src="../public/assets/img/valeurmana/5.jpg"></div>
        <div class="variable6 var" style=""><img class="valeurManaDeck" src="../public/assets/img/valeurmana/6+.jpg"></div>
    </div>
</div>

<!-- /////CARTES////  -->
<div class="cardsDeck">
                    <?php foreach ($allEquipements as $equipements): ?>             
                        
                        
                        <a href="<?= $router->generate('details-'.$equipements->getType(),['id'=> $equipements->getId()]) ?>">
                        
                            <img class="carteDeck" src="../public/assets/img/<?= $equipements->getType() ?>/<?= $equipements->getPicture() ?>.jpg" alt="">
                            
                        </a>  
                                    
                    <?php endforeach ?>
                </div> 
        </div>