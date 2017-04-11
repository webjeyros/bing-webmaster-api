<?php

namespace bingWebmaster\actions;


class AddQueryParameter implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $queryParameter;

    /**
     * AddQueryParameter constructor.
     * @param $siteUrl
     * @param $queryParameter
     */
    public function __construct($siteUrl, $queryParameter)
    {
        $this->siteUrl = $siteUrl;
        $this->queryParameter = $queryParameter;
    }


    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;

}