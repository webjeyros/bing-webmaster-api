<?php

namespace bingWebmaster\actions;


class GetQueryPageDetailStats implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $query;
    private $page;

    /**
     * GetQueryPageDetailStats constructor.
     * @param $siteUrl
     * @param $query
     * @param $page
     */
    public function __construct($siteUrl, $query, $page)
    {
        $this->siteUrl = $siteUrl;
        $this->query = $query;
        $this->page = $page;
    }


    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;

}