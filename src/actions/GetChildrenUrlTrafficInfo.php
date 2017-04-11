<?php

namespace bingWebmaster\actions;


class GetChildrenUrlTrafficInfo implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $url;
    private $page;

    /**
     * GetChildrenUrlTrafficInfo constructor.
     * @param $siteUrl
     * @param $url
     * @param $page
     */
    public function __construct($siteUrl, $url, $page)
    {
        $this->siteUrl = $siteUrl;
        $this->url = $url;
        $this->page = $page;
    }

    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;

}