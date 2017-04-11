<?php

namespace bingWebmaster\actions;


class GetPageStats implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * GetPageStats constructor.
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