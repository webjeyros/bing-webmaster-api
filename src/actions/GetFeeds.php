<?php

namespace bingWebmaster\actions;


class GetFeeds implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * GetFeeds constructor.
     * @param $siteUrl
     */
    public function __construct($siteUrl)
    {
        $this->siteUrl = $siteUrl;
    }


    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;

}