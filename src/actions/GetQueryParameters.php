<?php

namespace bingWebmaster\actions;


class GetQueryParameters implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * GetQueryParameters constructor.
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