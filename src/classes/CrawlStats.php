<?php

namespace bingWebmaster\classes;


class CrawlStats
{
    use mapTrait;
    public $AllOtherCodes;
    public $BlockedByRobotsTxt;
    public $Code2xx;
    public $Code301;
    public $Code302;
    public $Code4xx;
    public $Code5xx;
    public $CrawledPages;
    public $CrawlErrors;
    public $Date;
    public $InIndex;
    public $InLinks;
}