<?php

namespace bingWebmaster\actions;


class GetRelatedKeywords implements ActionInterface
{
    use ApiNameTrait;

    private $q;
    private $country;
    private $language;
    private $startDate;
    private $endDate;

    /**
     * GetRelatedKeywords constructor.
     * @param $q
     * @param $country
     * @param $language
     * @param $startDate
     * @param $endDate
     */
    public function __construct($q, $country, $language, $startDate, $endDate)
    {
        $this->q = $q;
        $this->country = $country;
        $this->language = $language;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }


    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;

}