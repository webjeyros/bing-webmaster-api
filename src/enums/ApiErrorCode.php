<?php

namespace bingWebmaster\enums;


abstract class ApiErrorCode
{
    const None=0;
    const InternalError=1;
    const UnknownError=2;
    const InvalidApiKey=3;
    const ThrottleUser=4;
    const ThrottleHost=5;
    const UserBlocked=6;
    const InvalidUrl=7;
    const InvalidParameter=8;
    const TooManySites=9;
    const UserNotFound=10;
    const NotFound=11;
    const AlreadyExists=12;
    const NotAllowed=13;
    const NotAuthorized=14;

}