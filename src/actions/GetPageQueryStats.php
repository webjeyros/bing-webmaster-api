<?php

namespace bingWebmaster\actions;


class GetPageQueryStats implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $page;

    /**
     * GetPageQueryStats constructor.
     * @param $siteUrl
     * @param $page
     */
    public function __construct($siteUrl, $page)
    {
        $this->siteUrl = $siteUrl;
        $this->page = $page;
    }


    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;

}