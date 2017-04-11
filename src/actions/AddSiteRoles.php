<?php

namespace bingWebmaster\actions;


class AddSiteRoles implements ActionInterface
{
    use ApiNameTrait;

    private $siteUrl;
    private $delegatedUrl;
    private $userEmail;
    private $authenticationCode;
    private $isAdministrator;
    private $isReadOnly;

    /**
     * AddSiteRoles constructor.
     * @param $siteUrl
     * @param $delegatedUrl
     * @param $userEmail
     * @param $authenticationCode
     * @param $isAdministrator
     * @param $isReadOnly
     */
    public function __construct($siteUrl, $delegatedUrl, $userEmail, $authenticationCode, $isAdministrator, $isReadOnly)
    {
        $this->siteUrl = $siteUrl;
        $this->delegatedUrl = $delegatedUrl;
        $this->userEmail = $userEmail;
        $this->authenticationCode = $authenticationCode;
        $this->isAdministrator = $isAdministrator;
        $this->isReadOnly = $isReadOnly;
    }


    public function getMethod()
    {
        return 'POST';
    }

	use PayloadTrait;

}