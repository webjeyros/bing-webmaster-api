<?php

namespace bingWebmaster\actions;


class GetDeepLinkAlgoUrls implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * GetDeepLinkAlgoUrls constructor.
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