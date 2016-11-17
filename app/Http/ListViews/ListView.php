<?php

namespace App\Http\ListViews;

class ListView extends \Administr\ListView\ListView
{
    public function __construct($dataSource)
    {
        $this->setRequest(request());

        parent::__construct($dataSource);

        $this->class = 'table table-bordered table-hover table-striped';
    }
}