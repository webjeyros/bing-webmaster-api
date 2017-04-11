<?php

namespace bingWebmaster\actions;


class GetFeedDetails implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $feedUrl;

    /**
     * GetFeedDetails constructor.
     * @param $siteUrl
     * @param $feedUrl
     */
    public function __construct($siteUrl, $feedUrl)
    {
        $this->siteUrl = $siteUrl;
        $this->feedUrl = $feedUrl;
    }


    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;

}