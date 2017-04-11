<?php

namespace bingWebmaster\actions;


class GetQueryStats implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * GetQueryStats constructor.
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