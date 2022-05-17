<?php


require_once '../vendor/autoload.php';

/* ------------
--- ROUTAGE ---
-------------*/

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {

    $router->setBasePath($_SERVER['BASE_URI']);

} else { 

    $_SERVER['BASE_URI'] = '/';
}
// <---------------ROUTE COLLECTION------------>test
// COULEURS && COUTS
$router->map(
    'GET',
    '/collection/[a:color]/[i:id]',
    [
        'method' => 'collectionOrder',
        'controller' => 'CollectionController'
    ],
    'collection-order'
);
$router->map(
    'POST',
    '/collection/[a:color]/[i:id]',
    [
        'method' => 'collectionPost',
        'controller' => 'CollectionController'
    ],
    'collection-orderPost'
);
// ROUTE DE BASE
$router->map(
    'GET',
    '/collection',
    [
        'method' => 'collection',
        'controller' => 'CollectionController'
    ],
    'collection-collection'
);
$router->map(
    'POST',
    '/collection',
    [
        'method' => 'collectionPost',
        'controller' => 'CollectionController'
    ],
    'collection-collectionPost'
);
// COULEURS
$router->map(
    'GET',
    '/collection/[a:color]',
    [
        'method' => 'collectionColor',
        'controller' => 'CollectionController'
    ],
    'collection-color'
);
$router->map(
    'POST',
    '/collection/[a:color]',
    [
        'method' => 'collectionPost',
        'controller' => 'CollectionController'
    ],
    'collection-colorPost'
);
//COUTS
$router->map(
    'GET',
    '/collections/[i:id]',
    [
        'method' => 'collectionCost',
        'controller' => 'CollectionController'
    ],
    'collection-cost'
);
$router->map(
    'POST',
    '/collection/[i:id]',
    [
        'method' => 'collectionPost',
        'controller' => 'CollectionController'
    ],
    'collection-costPost'
);
//<--------------ROUTE TYPES------------>
$router->map(
    'GET',
    '/types',
    [
        'method' => 'types',
        'controller' => 'TypesController'
    ],
    'types-types'
);
//CREATURE TRIBAL
$router->map(
    'GET',
    '/types/creature/[a:tribut]',
    [
        'method' => 'typesTribal',
        'controller' => 'TypesController'
    ],
    'types-tribal'
);
//ROUTE DECKS
$router->map(
    'GET',
    '/decks/[a:deck]',
    [
        'method' => 'deck',
        'controller' => 'DeckController'
    ],
    'decks-deck'
);
$router->map(
    'POST',
    '/decks/[a:deck]',
    [
        'method' => 'deckPost',
        'controller' => 'DeckController'
    ],
    'decks-deckPost'
);
//DECK CREATE
$router->map(
    'GET',
    '/add',
    [
        'method' => 'deckAdd',
        'controller' => 'DeckController'
    ],
    'decks-add'
);
$router->map(
    'POST',
    '/add',
    [
        'method' => 'deckAddPost',
        'controller' => 'DeckController'
    ],
    'decks-addPost'
);
//DECK UPDATE
$router->map(
    'GET',
    '/update/[a:type]/[i:id]',
    [
        'method' => 'deckUpdate',
        'controller' => 'DeckController'
    ],
    'decks-update'
);
$router->map(
    'POST',
    '/update/[a:type]/[i:id]',
    [
        'method' => 'deckUpdatePost',
        'controller' => 'DeckController'
    ],
    'decks-updatePost'
);
//DECK DELETE
$router->map(
    'GET',
    '/delete/[a:deck]/[i:id]',
    [
        'method' => 'deckDelete',
        'controller' => 'DeckController'
    ],
    'decks-delete'
);
$router->map(
    'POST',
    '/delete/[a:deck]/[i:id]',
    [
        'method' => 'deckDeletePost',
        'controller' => 'DeckController'
    ],
    'decks-deletePost'
);
//ROUTE COMMANDANT
$router->map(
    'GET',
    '/commandant',
    [
        'method' => 'commandant',
        'controller' => 'CommandantController'
    ],
    'commandants-commandant'
);
$router->map(
    'POST',
    '/commandant',
    [
        'method' => 'commandDelPost',
        'controller' => 'CommandantController'
    ],
    'commandants-commandantPost'
);
//ROUTE DETAIL
$router->map(
    'GET',
    '/detail/[a:deck]/[i:id]',
    [
        'method' => 'deckDetail',
        'controller' => 'DetailController'
    ],
    'details-detail'
);
$router->map(
    'GET',
    '/detail/[i:id]',
    [
        'method' => 'deckCollect',
        'controller' => 'DetailController'
    ],
    'details-collect'
);
$router->map(
    'POST',
    '/detail/[i:id]',
    [
        'method' => 'deckUpdatePost',
        'controller' => 'DeckController'
    ],
    'details-collectPost'
);


/* -------------
--- DISPATCH ---
--------------*/

$match = $router->match();

$dispatcher = new Dispatcher($match, 'ErrorController::err404');

$dispatcher->setControllersNamespace('App\Controllers');

$dispatcher->dispatch();
