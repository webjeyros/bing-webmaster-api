<?php

namespace bingWebmaster\enums;


abstract class HttpCodeFilters
{
    const Any=0;
    const Code2xx=1;
    const Code3xx=2;
    const Code301=4;
    const Code302=8;
    const Code4xx=16;
    const Code5xx=32;
    const AllOthers=64;
}