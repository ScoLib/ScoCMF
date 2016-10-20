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
    protected $viewParameters = [];

    protected function setViewParameter($array)
    {
        $this->viewParameters = array_merge($this->viewParameters, $array);
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
        if (!empty($this->viewParameters)) {
            $params = array_merge($this->viewParameters, $params);
        }
        return view($view, $params);
    }


}
