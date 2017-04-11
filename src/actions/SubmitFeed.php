<?php

namespace bingWebmaster\actions;


class SubmitFeed implements ActionInterface
{
    use ApiNameTrait;

    private $feedUrl;
    private $url;

    /**
     * SubmitFeed constructor.
     * @param $feedUrl
     * @param $url
     */
    public function __construct($feedUrl, $url)
    {
        $this->feedUrl = $feedUrl;
        $this->url = $url;
    }


    public function getMethod()
    {
        return 'POST';
    }

	use PayloadTrait;

}