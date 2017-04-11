<?php

namespace bingWebmaster\actions;


class GetBlockedUrls implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * GetBlockedUrls constructor.
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