<?php

namespace bingWebmaster\actions;


class GetQueryPageStats implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $query;

    /**
     * GetQueryPageStats constructor.
     * @param $siteUrl
     * @param $query
     */
    public function __construct($siteUrl, $query)
    {
        $this->siteUrl = $siteUrl;
        $this->query = $query;
    }


    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;

}