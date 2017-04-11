<?php

namespace bingWebmaster\actions;


class EnableDisableQueryParameter implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $queryParameter;
    private $isEnabled;

    /**
     * EnableDisableQueryParameter constructor.
     * @param $siteUrl
     * @param $queryParameter
     * @param $isEnabled
     */
    public function __construct($siteUrl, $queryParameter, $isEnabled)
    {
        $this->siteUrl = $siteUrl;
        $this->queryParameter = $queryParameter;
        $this->isEnabled = $isEnabled;
    }


    public function getMethod()
    {
        return 'POST';
    }

	use PayloadTrait;
}