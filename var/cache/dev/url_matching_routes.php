<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/health-check' => [[['_route' => 'health_check', '_controller' => 'App\\Shared\\Infrastructure\\Controller\\HealthCheckAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/auth/token/refresh' => [[['_route' => 'gesdinet_jwt_refresh_token'], null, null, null, false, false, null]],
        '/api/auth/token/login' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
        '/api/users/me' => [[['_route' => 'app_users_infrastructure_getmeaction__invoke', '_controller' => 'App\\Users\\Infrastructure\\Controller\\GetMeAction'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
