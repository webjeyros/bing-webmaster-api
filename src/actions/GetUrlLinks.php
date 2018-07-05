<?php

namespace bingWebmaster\actions;


class GetUrlLinks implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $link;
    private $page;

    /**
     * GetUrlLinks constructor.
     * @param $siteUrl
     * @param $link
     * @param $page
     */
    public function __construct($siteUrl, $link, $page)
    {
        $this->siteUrl = $siteUrl;
        $this->link = $link;
        $this->page = $page;
    }


    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;

}
