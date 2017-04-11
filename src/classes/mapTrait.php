<?php

namespace bingWebmaster\classes;


trait mapTrait
{
    public function __construct($obj)
    {
        foreach (array_keys(get_class_vars(__CLASS__)) as $item) {
            $this->{$item}=$obj->{$item};
        }
    }
}