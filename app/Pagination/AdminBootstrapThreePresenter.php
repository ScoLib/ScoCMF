<?php

namespace Sco\Pagination;

use Illuminate\Support\HtmlString;
use Illuminate\Pagination\BootstrapThreePresenter;

class AdminBootstrapThreePresenter extends BootstrapThreePresenter
{
    public function render()
    {
        if ($this->hasPages()) {
            return new HtmlString(sprintf(
                '<div class="pull-left">%s - %s / 共 %s 条记录</div>'
                . '<ul class="pagination pagination-sm no-margin pull-right">%s %s %s</ul>',
                $this->getFrom(),
                $this->getTo(),
                $this->getTotal(),
                $this->getPreviousButton(),
                $this->getLinks(),
                $this->getNextButton()
            ));
        }

        return '';
    }

    public function getTotal()
    {
        return $this->paginator->total();
    }

    public function getFrom()
    {
        return $this->paginator->firstItem();
    }

    public function getTo()
    {
        return $this->paginator->lastItem();
    }
}