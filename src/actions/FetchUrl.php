<?php

namespace bingWebmaster\actions;


class FetchUrl implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $url;

    /**
     * FetchUrl constructor.
     * @param $siteUrl
     * @param $url
     */
    public function __construct($siteUrl, $url)
    {
        $this->siteUrl = $siteUrl;
        $this->url = $url;
    }


    public function getMethod()
    {
        return 'POST';
    }

	use PayloadTrait;
}