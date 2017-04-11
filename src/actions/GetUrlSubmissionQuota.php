<?php

namespace bingWebmaster\actions;


class GetUrlSubmissionQuota implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;

    /**
     * GetUrlSubmissionQuota constructor.
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