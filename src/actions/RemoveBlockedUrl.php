<?php

namespace bingWebmaster\actions;


class RemoveBlockedUrl implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $blockedUrl;

    /**
     * RemoveBlockedUrl constructor.
     * @param $siteUrl
     * @param $blockedUrl
     */
    public function __construct($siteUrl, $blockedUrl)
    {
        $this->siteUrl = $siteUrl;
        $this->blockedUrl = $blockedUrl;
    }


    public function getMethod()
    {
        return 'POST';
    }

	use PayloadTrait;

}