<?php

namespace bingWebmaster\actions;


class GetDisavowedLinks implements ActionInterface
{
    use ApiNameTrait;

    private $url;

    /**
     * GetDisavowedLinks constructor.
     * @param $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }


    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;
}