<?php

namespace bingWebmaster\actions;


class GetCrawlStats implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * GetCrawlStats constructor.
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