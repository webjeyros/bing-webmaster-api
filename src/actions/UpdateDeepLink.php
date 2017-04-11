<?php

namespace bingWebmaster\actions;


class UpdateDeepLink implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $algoUrl;
    private $deepLink;
    private $weight;

    /**
     * UpdateDeepLink constructor.
     * @param $siteUrl
     * @param $algoUrl
     * @param $deepLink
     * @param $weight
     */
    public function __construct($siteUrl, $algoUrl, $deepLink, $weight)
    {
        $this->siteUrl = $siteUrl;
        $this->algoUrl = $algoUrl;
        $this->deepLink = $deepLink;
        $this->weight = $weight;
    }


    public function getMethod()
    {
        return 'POST';
    }

	use PayloadTrait;

}