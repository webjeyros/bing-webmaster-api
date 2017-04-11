<?php

namespace bingWebmaster\actions;


class GetKeywordStats implements ActionInterface
{
    use ApiNameTrait;

    private $q;
    private $country;
    private $language;

    /**
     * GetKeywordStats constructor.
     * @param $q
     * @param $country
     * @param $language
     */
    public function __construct($q, $country, $language)
    {
        $this->q = $q;
        $this->country = $country;
        $this->language = $language;
    }


    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;

}