<?php if(isset($_SESSION['connectedUser'])):?>
<div class="wrapperDeckList" style="flex-wrap: wrap;display: flex;justify-content:space-evenly;flex-direction: row-reverse;list-style-type: auto;width:10%;margin-top: 4%;">
                    <div  class="detailDivAdd"style="overflow-y:scroll;display:inline-block;height: 36vh;margin-top:1%;;width: 15vh;position: fixed;;">
                            <?php foreach ($listeDeck as $ninja): ?>      
                            <div class="cardListDeck detailDivAdd" style="flex-wrap:unset;display:flex;position:relative;background-image:  url(../public/assets/img/commandants/<?= $ninja->getCommandant() ?>.jpg);height: 6%;background-size:45vh">
                            

                                <div class="nameDeckList" id="<?= $ninja->getType() ?>/<?= $ninja->getPicture() ?>.jpg"style="display:inline-flex;margin-left:10%;justify-content:space-around;font-size:small">
                                <div>
                                <?= $ninja->getName()?>
                                </div>
                                <div>
                                    <img class="imgDetail" src="../public/assets/img/couleurs/<?= $ninja->getColor1()?>.jpg" alt="">
                                <?php if (($ninja->getColor2())!=NULL):?>
                                    <img class="imgDetail" src="../public/assets/img/couleurs/<?= $ninja->getColor2()?>.jpg" alt="">
                                <?php endif; ?>
                                <?php if (($ninja->getColor3())!=NULL):?> 
                                    <img class="imgDetail" src="../public/assets/img/couleurs/<?= $ninja->getColor3()?>.jpg" alt="">
                                <?php endif; ?>
                                <?php if (($ninja->getColor4())!=NULL):?> 
                                    <img class="imgDetail" src="../public/assets/img/couleurs/<?= $ninja->getColor4()?>.jpg" alt="">
                                <?php endif; ?>
                                <?php if (($ninja->getColor5())!=NULL):?> 
                                    <img class="imgDetail" src="../public/assets/img/couleurs/<?= $ninja->getColor5()?>.jpg" alt="">                    
                                <?php endif; ?>
                                </div>
                            </div>
                                <div style="display:inline-block;position:absolute;right:20px;"><?= $ninja->getconvertManacost() ?></div>
                                
                                
                                    <div>
                                        
                                        
                                            <div style="display:none;" class="pretty p-default pretty2"><input type="checkbox" name='deck' value="<?=$ninja->getName()?>" checked /><div class="state p-danger"><label></label></div></div>                        
                                            <input class ="btn btn-danger" value ="Add" style="font-size:xx-small;color: red;bottom: -8px; left: -10px" type="submit" src="../public/assets/img/del.jpg"></input>
                                          
                                        
                                    </div>                                                      
                            </div>  
                              <div class="contenu">COUCOUCOUCOUCOU</div>  
                            <?php endforeach ?>
                    </div>
                </div>
                <?php endif; ?>