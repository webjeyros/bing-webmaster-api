<?php

namespace bingWebmaster\actions;


class VerifySite implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * VerifySite constructor.
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