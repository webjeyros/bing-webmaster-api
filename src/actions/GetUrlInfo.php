<?php

namespace bingWebmaster\actions;


class GetUrlInfo implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $includeAllSubdomains;

    /**
     * GetUrlInfo constructor.
     * @param $siteUrl
     * @param $includeAllSubdomains
     */
    public function __construct($siteUrl, $includeAllSubdomains)
    {
        $this->siteUrl = $siteUrl;
        $this->includeAllSubdomains = $includeAllSubdomains;
    }


    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;

}