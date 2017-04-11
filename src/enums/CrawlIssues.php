<?php

namespace bingWebmaster\enums;


abstract class CrawlIssues
{
    const None=0;
    const Code301=1;
    const Code302=2;
    const Code4xx=4;
    const Code5xx=8;
    const BlockedByRobotsTxt=16;
    const ContainsMalware=32;
    const ImportantUrlBlockedByRobotsTxt=64;
}