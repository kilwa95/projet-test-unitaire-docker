<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/items/todolist' => [[['_route' => 'app_item_getodolistitems', '_controller' => 'App\\Controller\\ItemController::getodolistItems'], null, ['GET' => 0], null, false, false, null]],
        '/todolist' => [[['_route' => 'app_todolist_posttodolist', '_controller' => 'App\\Controller\\ToDoListController::postTodolist'], null, ['POST' => 0], null, false, false, null]],
        '/users' => [[['_route' => 'app_user_getusers', '_controller' => 'App\\Controller\\UserController::GetUsers'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/user/items/todolist/([^/]++)(*:36)'
                .'|/todolist/([^/]++)(*:61)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'app_item_postitemetodolist', '_controller' => 'App\\Controller\\ItemController::postItemeTodolist'], ['id'], ['POST' => 0], null, false, true, null]],
        61 => [
            [['_route' => 'app_todolist_patchtodolist', '_controller' => 'App\\Controller\\ToDoListController::patchTodolist'], ['id'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
