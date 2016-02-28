<?php

namespace Sco\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{

    public function __construct()
    {
    }

    /**
     * 视图参数
     *
     * @type array
     */
    protected $params = [];

    /**
     * 设置视图参数值
     *
     * @param string $name  参数名
     * @param mixed  $value 值
     */
    public function __set($name, $value)
    {
        if (!property_exists($this, $name)) {
            $this->params[$name] = $value;
        }

    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        } else {
            return isset($this->params[$name]) ? $this->params[$name] : null;
        }

    }

    /**
     * 视图输出
     *
     * @param string $view   视图文件
     * @param array  $params 参数
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    protected function render($view, $params = [])
    {
        if (!empty($this->params)) {
            $params = array_merge($this->params, $params);
        }
        return view($view, $params);
    }


}
