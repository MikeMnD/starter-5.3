<?php

namespace App\QueryFilters;

use Administr\QueryFilters\Filter as BaseFilter;

class Filter extends BaseFilter
{
    /**
     * @var ListView
     */
    protected $listView = null;

    /**
     * @return array
     */
    protected function filters()
    {
        $filters = parent::filters();

        if(!is_null($this->listView)) {
            $listView = new $this->listView();
            $filters = $filters + $listView->getFilters()->getData();
        }

        return $filters;
    }
}