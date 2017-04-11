<?php

namespace bingWebmaster\actions;
use \bingWebmaster\classes\BlockedUrl;

class AddBlockedUrl implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $blockedUrl;

    /**
     * AddBlockedUrl constructor.
     * @param $siteUrl
     * @param $blockedUrl
     */
    public function __construct($siteUrl,BlockedUrl $blockedUrl)
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