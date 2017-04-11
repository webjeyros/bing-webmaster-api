<?php

namespace bingWebmaster\actions;


interface ActionInterface
{
    public function getMethod();

    public function getPayload();

    public function getApiName();

}