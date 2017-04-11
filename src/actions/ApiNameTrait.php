<?php

namespace bingWebmaster\actions;


trait ApiNameTrait
{
    public function getApiName()
    {
        $path = explode('\\', __CLASS__);
        return array_pop($path);
    }
}