<?php

namespace bingWebmaster\actions;


class AddDisavowedLink implements ActionInterface
{
    use ApiNameTrait;

    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;

}