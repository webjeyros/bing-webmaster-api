<?php

namespace bingWebmaster\actions;


class GetChildrenUrlInfo implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $url;
    private $page;
    private $filterProperties;

    /**
     * GetChildrenUrlInfo constructor.
     * @param $siteUrl
     * @param $url
     * @param $page
     * @param $filterProperties
     */
    public function __construct($siteUrl, $url, $page, $filterProperties)
    {
        $this->siteUrl = $siteUrl;
        $this->url = $url;
        $this->page = $page;
        $this->filterProperties = $filterProperties;
    }

    public function getMethod()
    {
        return 'POST';
    }

	use PayloadTrait;
}