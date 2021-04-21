<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_users' => [[], ['_controller' => 'App\\Controller\\AdminController::usersList'], [], [['text', '/admin/utilisateurs']], [], []],
    'admin_edit_user' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editUser'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/utilisateur/modifier']], [], []],
    'admin_delete_user' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/utilisateur/supprimer']], [], []],
    'admin_add_product' => [[], ['_controller' => 'App\\Controller\\AdminController::addProduct'], [], [['text', '/admin/produit/ajouter']], [], []],
    'produit_products' => [[], ['_controller' => 'App\\Controller\\ProduitController::productList'], [], [['text', '/produit/listeproduits']], [], []],
    'produit_panier' => [[], ['_controller' => 'App\\Controller\\ProduitController::affichePanier'], [], [['text', '/produit/panier']], [], []],
    'security_registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/security/inscription']], [], []],
    'security_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/security/connexion']], [], []],
    'security_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/security/deconnexion']], [], []],
    'site' => [[], ['_controller' => 'App\\Controller\\SiteController::index'], [], [['text', '/']], [], []],
    'add' => [['id'], ['_controller' => 'App\\Controller\\SiteController::add'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/ajout']], [], []],
    'del' => [['id'], ['_controller' => 'App\\Controller\\SiteController::del'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/supprimer']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::editUser'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/user/utilisateur/modifier']], [], []],
];
