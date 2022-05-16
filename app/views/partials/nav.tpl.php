
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="height: auto;">
      
      <li class="nav-item active">
        <a class="nav-link" href="<?= $router->generate('collection-collection') ?>">Collection</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= $router->generate('types-types') ?>" tabindex="-1" aria-disabled="true">Types</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Decks
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?= $router->generate('decks-add') ?>">Nouveau Deck</a>
          <?php foreach ($navDecks as $deck): ?>
          <a class="dropdown-item" href="<?= $router->generate('decks-deck',['deck'=>$deck->getName()]) ?>"><?= $deck->getName()?></a>
          <?php endforeach ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= $router->generate('commandants-commandant') ?>" tabindex="-1" aria-disabled="true">Commandants</a>
      </li>
    </ul >
    
  </div>
</nav>
</header>