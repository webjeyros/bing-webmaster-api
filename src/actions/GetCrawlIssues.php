<?php

namespace bingWebmaster\actions;


class GetCrawlIssues implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * GetCrawlIssues constructor.
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