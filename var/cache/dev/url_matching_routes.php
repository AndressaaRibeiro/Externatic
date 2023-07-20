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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/company' => [[['_route' => 'app_company', '_controller' => 'App\\Controller\\CompanyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/company/new' => [[['_route' => 'app_company_new', '_controller' => 'App\\Controller\\CompanyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contact/create' => [[['_route' => 'app_contact_create', '_controller' => 'App\\Controller\\ContactController::create'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'app_faq', '_controller' => 'App\\Controller\\FaqController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/mention' => [[['_route' => 'app_mention', '_controller' => 'App\\Controller\\MentionController::index'], null, null, null, false, false, null]],
        '/offer/new' => [[['_route' => 'app_offer_new', '_controller' => 'App\\Controller\\OfferController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/politique' => [[['_route' => 'app_politique', '_controller' => 'App\\Controller\\PolitiqueController::index'], null, null, null, false, false, null]],
        '/profil/company' => [[['_route' => 'app_profil_company_index', '_controller' => 'App\\Controller\\ProfilCompanyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/profil/company/new' => [[['_route' => 'app_profil_company_new', '_controller' => 'App\\Controller\\ProfilCompanyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil_index', '_controller' => 'App\\Controller\\ProfilController::index'], null, ['GET' => 0], null, true, false, null]],
        '/profil/new' => [[['_route' => 'app_profil_new', '_controller' => 'App\\Controller\\ProfilController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/offer' => [[['_route' => 'app_offer', '_controller' => 'App\\Controller\\OfferController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
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
                .'|/company/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/offer/([^/]++)(?'
                    .'|(*:237)'
                    .'|/(?'
                        .'|edit(*:253)'
                        .'|watchlist(*:270)'
                    .')'
                    .'|(*:279)'
                .')'
                .'|/profil/(?'
                    .'|company/([^/]++)(?'
                        .'|(*:318)'
                        .'|/(?'
                            .'|edit(*:334)'
                            .'|mesOffres(*:351)'
                        .')'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:372)'
                        .'|/(?'
                            .'|edit(*:388)'
                            .'|favoris(*:403)'
                        .')'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:450)'
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
        189 => [[['_route' => 'app_company_show', '_controller' => 'App\\Controller\\CompanyController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'app_company_edit', '_controller' => 'App\\Controller\\CompanyController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'app_company_delete', '_controller' => 'App\\Controller\\CompanyController::delete'], ['slug'], ['POST' => 0], null, false, true, null]],
        237 => [[['_route' => 'app_offer_show', '_controller' => 'App\\Controller\\OfferController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'app_offer_edit', '_controller' => 'App\\Controller\\OfferController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        270 => [[['_route' => 'app_offer_watchlist', '_controller' => 'App\\Controller\\OfferController::addToWatchlist'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        279 => [[['_route' => 'app_offer_delete', '_controller' => 'App\\Controller\\OfferController::delete'], ['slug'], ['POST' => 0], null, false, true, null]],
        318 => [
            [['_route' => 'app_profil_company_delete', '_controller' => 'App\\Controller\\ProfilCompanyController::delete'], ['slug'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_profil_company_show', '_controller' => 'App\\Controller\\ProfilCompanyController::show'], ['slug'], ['GET' => 0], null, false, true, null],
        ],
        334 => [[['_route' => 'app_profil_company_edit', '_controller' => 'App\\Controller\\ProfilCompanyController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        351 => [[['_route' => 'app_profil_company_mesOffres', '_controller' => 'App\\Controller\\ProfilCompanyController::showMesOffres'], ['slug'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        372 => [
            [['_route' => 'app_profil_delete', '_controller' => 'App\\Controller\\ProfilController::delete'], ['slug'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_profil_show', '_controller' => 'App\\Controller\\ProfilController::show'], ['slug'], ['GET' => 0], null, false, true, null],
        ],
        388 => [[['_route' => 'app_profil_edit', '_controller' => 'App\\Controller\\ProfilController::edit'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        403 => [[['_route' => 'app_profil_favoris', '_controller' => 'App\\Controller\\ProfilController::showFavorites'], ['slug'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        450 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
