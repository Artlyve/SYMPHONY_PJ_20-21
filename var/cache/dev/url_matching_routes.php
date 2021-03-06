<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/utilisateurs' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::usersList'], null, null, null, false, false, null]],
        '/admin/produit/ajouter' => [[['_route' => 'admin_add_product', '_controller' => 'App\\Controller\\AdminController::addProduct'], null, null, null, false, false, null]],
        '/produit/listeproduits' => [[['_route' => 'produit_products', '_controller' => 'App\\Controller\\ProduitController::productList'], null, null, null, false, false, null]],
        '/security/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/security/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/security/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'site', '_controller' => 'App\\Controller\\SiteController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/utilisateur/(?'
                        .'|modifier/(\\d+)(*:208)'
                        .'|supprimer/(\\d+)(*:231)'
                    .')'
                    .'|jout/(\\d+)(*:250)'
                .')'
                .'|/supprimer/(\\d+)(*:275)'
                .'|/user/u(?'
                    .'|tilisateur(?'
                        .'|/(?'
                            .'|modifier/(\\d+)(*:324)'
                            .'|panier/(\\d+)(*:344)'
                        .')'
                        .'|2/modifier/(\\d+)(*:369)'
                    .')'
                    .'|ser/supprimer/(\\d+)(*:397)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        208 => [[['_route' => 'admin_edit_user', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        231 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'add', '_controller' => 'App\\Controller\\SiteController::add'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'del', '_controller' => 'App\\Controller\\SiteController::del'], ['id'], null, null, false, true, null]],
        324 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::editUser'], ['id'], null, null, false, true, null]],
        344 => [[['_route' => 'user_panier', '_controller' => 'App\\Controller\\UserController::panierUser'], ['id'], null, null, false, true, null]],
        369 => [[['_route' => 'user_edit2', '_controller' => 'App\\Controller\\UserController::editUser2'], ['id'], null, null, false, true, null]],
        397 => [
            [['_route' => 'user_delete_product', '_controller' => 'App\\Controller\\UserController::deleteProduct'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
