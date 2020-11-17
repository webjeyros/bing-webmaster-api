<?php

namespace bingWebmaster\actions;


class SubmitFeed implements ActionInterface
{
    use ApiNameTrait;

    private $feedUrl;
    private $siteUrl;

    /**
     * SubmitFeed constructor.
     * @param $feedUrl
     * @param $siteUrl
     */
    public function __construct($feedUrl, $siteUrl)
    {
        $this->feedUrl = $feedUrl;
        $this->siteUrl = $siteUrl;
    }


    public function getMethod()
    {
        return 'POST';
    }

	use PayloadTrait;

}
