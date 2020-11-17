<?php

namespace bingWebmaster\actions;


class SubmitFeed implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $feedUrl;
    
    /**
     * SubmitFeed constructor.
     * @param $siteUrl
     * @param $feedUrl
    */
    public function __construct( $siteUrl,$feedUrl)
    {
	$this->siteUrl = $siteUrl;    
        $this->feedUrl = $feedUrl;
        
    }


    public function getMethod()
    {
        return 'POST';
    }

	use PayloadTrait;

}
