<?php

/**
 * 生成资源本地路径
 *
 * @param string $path
 *
 * @return string
 */
function resources_path($path = '')
{
    return app('path') . DIRECTORY_SEPARATOR . 'resources' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
}

/**
 * 生成资源地址
 *
 * @param string $path
 * @param null   $secure
 *
 * @return string
 */
function resources($path = '', $secure = null)
{
    return app('url')->asset('resources/' . $path, $secure);
}

/**
 * 生成后台操作URL
 *
 * @param string $url        模块/控制器@操作
 * @param array  $parameters 参数
 * @param bool   $secure     绝对地址
 *
 * @return string
 */
function backend_action($url, $parameters = [], $secure = true)
{
    $path = 'Backend\\';
    if (!empty($url)) {
        list($controllers, $action) = explode('@', strtolower($url));
        if (!$action) {
            $action = 'index';
        }
        $paths      = explode('/', $controllers);
        $controller = array_pop($paths);
        $module     = empty($paths) ? '' : array_pop($paths);
        if (!empty($module)) {
            $path .= ucfirst($module) . '\\';
        }
        $path .= ucfirst($controller) . 'Controller@' . $action;
    }

    return action($path, $parameters, $secure);
}