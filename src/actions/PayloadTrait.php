<?php

namespace bingWebmaster\actions;


trait PayloadTrait
{
    public function getPayload()
    {
        return get_object_vars($this);
    }
}