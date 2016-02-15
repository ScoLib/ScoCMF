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
    $resourcesUrl = config('domain.resources_site_url');
    if (empty($path)) {
        return $resourcesUrl;
    }
    return app('url')->assetFrom($resourcesUrl, $path, $secure);
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
        list($controllers, $action) = explode('@', $url);
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

/**
 * 后台语言包
 *
 * @param string $id
 * @param array  $parameters
 * @param string $domain
 * @param string $locale
 *
 * @return string|\Symfony\Component\Translation\TranslatorInterface
 */
function backend_trans($id = null, $parameters = [], $domain = 'messages', $locale = null)
{
    return trans($id !== null ? 'Backend::' . $id : $id, $parameters, $domain, $locale);
}

function success($message = '操作成功', $data = [])
{
    return callback(true, $message, $data);
}

function error($message = '操作失败', $data = [])
{
    return callback(false, $message, $data);
}

function callback($state, $message = '', $data = [])
{
    $result = [
        'state'   => $state,
        'message' => $message,
        'data'    => $data

    ];
    return $result;
}