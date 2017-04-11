<?php

namespace bingWebmaster\actions;


class SaveCrawlSettings implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $crawlSettings;

    /**
     * SaveCrawlSettings constructor.
     * @param $siteUrl
     * @param $crawlSettings
     */
    public function __construct($siteUrl, $crawlSettings)
    {
        $this->siteUrl = $siteUrl;
        $this->crawlSettings = $crawlSettings;
    }


    public function getMethod()
    {
        return 'POST';
    }

	use PayloadTrait;

}