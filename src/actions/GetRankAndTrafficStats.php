<?php

namespace bingWebmaster\actions;


class GetRankAndTrafficStats implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * GetRankAndTrafficStats constructor.
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