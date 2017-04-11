<?php

namespace bingWebmaster\actions;


class RemoveFeed implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $feedUrl;

    /**
     * RemoveFeed constructor.
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
        return 'POST';
    }

	use PayloadTrait;

}