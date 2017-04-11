<?php

namespace bingWebmaster\actions;


class RemoveQueryParameter implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $queryParameter;

    /**
     * RemoveQueryParameter constructor.
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
        return 'POST';
    }

	use PayloadTrait;

}