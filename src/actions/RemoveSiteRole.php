<?php

namespace bingWebmaster\actions;


class RemoveSiteRole implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $siteRole;

    /**
     * RemoveSiteRole constructor.
     * @param $siteUrl
     * @param $siteRole
     */
    public function __construct($siteUrl, $siteRole)
    {
        $this->siteUrl = $siteUrl;
        $this->siteRole = $siteRole;
    }


    public function getMethod()
    {
        return 'POST';
    }

	use PayloadTrait;

}