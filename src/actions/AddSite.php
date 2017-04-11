<?php

namespace bingWebmaster\actions;


class AddSite implements ActionInterface
{
    use ApiNameTrait;

    private  $siteUrl;

    /**
     * AddSite constructor.
     * @param $siteUrl
     */
    public function __construct($siteUrl)
    {
        $this->siteUrl = $siteUrl;
    }

    public function getMethod()
    {
        return 'POST';
    }

	use PayloadTrait;
}