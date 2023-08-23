<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/detail' => [[['_route' => 'app_detail_index', '_controller' => 'App\\Controller\\DetailController::index'], null, ['GET' => 0], null, true, false, null]],
        '/detail/new' => [[['_route' => 'app_detail_new', '_controller' => 'App\\Controller\\DetailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/order' => [[['_route' => 'app_order_index', '_controller' => 'App\\Controller\\OrderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/order/new' => [[['_route' => 'app_order_new', '_controller' => 'App\\Controller\\OrderController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/product/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/detail/([^/]++)(?'
                    .'|(*:61)'
                    .'|/edit(*:73)'
                    .'|(*:80)'
                .')'
                .'|/order/([^/]++)(?'
                    .'|(*:106)'
                    .'|/edit(*:119)'
                    .'|(*:127)'
                .')'
                .'|/product/([^/]++)(?'
                    .'|(*:156)'
                    .'|/edit(*:169)'
                    .'|(*:177)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:203)'
                    .'|/edit(*:216)'
                    .'|(*:224)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        61 => [[['_route' => 'app_detail_show', '_controller' => 'App\\Controller\\DetailController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        73 => [[['_route' => 'app_detail_edit', '_controller' => 'App\\Controller\\DetailController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        80 => [[['_route' => 'app_detail_delete', '_controller' => 'App\\Controller\\DetailController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        106 => [[['_route' => 'app_order_show', '_controller' => 'App\\Controller\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        119 => [[['_route' => 'app_order_edit', '_controller' => 'App\\Controller\\OrderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        127 => [[['_route' => 'app_order_delete', '_controller' => 'App\\Controller\\OrderController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        156 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        169 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        177 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        203 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        216 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        224 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
