<?php

namespace bingWebmaster\actions;


class RemoveSite implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * RemoveSite constructor.
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