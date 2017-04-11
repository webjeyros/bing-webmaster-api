<?php

namespace bingWebmaster\actions;


class GetFetchedUrls implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * GetFetchedUrls constructor.
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