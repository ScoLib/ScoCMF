<?php
use Sco\Repositories\RouteRepository;
$routes = app(RouteRepository::class)->getValidRouteList();
foreach ($routes as $route) {
    if (empty($route['middleware'])) {
        Route::$route['method']($route['uri'], $route['action'])->name($route['name']);
    } else {
        $middleware = explode('|', $route['middleware']);
        Route::$route['method']($route['uri'], $route['action'])->name($route['name'])
                                                                ->middleware($middleware);
    }
}