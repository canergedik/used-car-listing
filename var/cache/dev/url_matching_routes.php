<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/v1/user/add-file' => [[['_route' => 'api_upload_form', '_controller' => 'App\\Controller\\ApiMemberController::userSetForm'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/v1/user/change-password' => [[['_route' => 'api_change_password', '_controller' => 'App\\Controller\\ApiMemberController::changePassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/v1/user/auth-token' => [[['_route' => 'api_auth_token', '_controller' => 'App\\Controller\\ApiMemberController::authToken'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/web/register' => [[['_route' => 'web_member', '_controller' => 'App\\Controller\\MemberController::userCreate'], null, null, null, false, false, null]],
        '/web/auth' => [[['_route' => 'web_auth', '_controller' => 'App\\Controller\\MemberController::web_auth'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/web/login' => [[['_route' => 'web_login', '_controller' => 'App\\Controller\\MemberController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/web/change-password' => [[['_route' => 'web_change_password', '_controller' => 'App\\Controller\\MemberController::changePassword'], null, null, null, false, false, null]],
        '/web/edit' => [[['_route' => 'web_app_member_edit', '_controller' => 'App\\Controller\\MemberController::edit'], null, null, null, false, false, null]],
        '/web/remove' => [[['_route' => 'web_app_member_removemarketplacedata', '_controller' => 'App\\Controller\\MemberController::removeMarketPlaceData'], null, ['POST' => 0], null, false, false, null]],
        '/web/search-filter' => [[['_route' => 'result_search_filter', '_controller' => 'App\\Controller\\IndexController::getSearchFilter'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/web/(?'
                    .'|admin/listing(?'
                        .'|(?:/(\\d+))?(*:77)'
                        .'|/([^/]++)(?:/(\\d+))?(*:104)'
                    .')'
                    .'|edit(?:/(\\d+))?(*:128)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        77 => [[['_route' => 'result_list', 'page' => 1, '_controller' => 'App\\Controller\\IndexController::index'], ['page'], null, null, false, true, null]],
        104 => [[['_route' => 'result_list_query', 'page' => 1, '_controller' => 'App\\Controller\\MemberController::index'], ['q', 'page'], null, null, false, true, null]],
        128 => [
            [['_route' => 'result_edit_query', 'page' => 1, '_controller' => 'App\\Controller\\MemberController::edit'], ['page'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
