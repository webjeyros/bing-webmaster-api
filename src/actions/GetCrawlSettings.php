<?php

namespace bingWebmaster\actions;


class GetCrawlSettings implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * GetCrawlSettings constructor.
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