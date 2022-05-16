                            <?php for ($i=0; $i < count($findDecks); $i++) :{?> 
                               <a>
                               <?= $ninja->getNinjacount()?>
                               <img class="carteTypes deckImg" style="padding-top:<?= $i+5 ?>%" src="../public/assets/img/<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg" alt="">                            
                               </a>
                            <?:}?>