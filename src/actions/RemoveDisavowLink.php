<?php

namespace bingWebmaster\actions;


class RemoveDisavowLink implements ActionInterface
{
    use ApiNameTrait;

    private $url;
    private $urlsToProcess;
    private $entitiesToProcess;

    /**
     * RemoveDisavowLink constructor.
     * @param $url
     * @param $urlsToProcess
     * @param $entitiesToProcess
     */
    public function __construct($url, $urlsToProcess, $entitiesToProcess)
    {
        $this->url = $url;
        $this->urlsToProcess = $urlsToProcess;
        $this->entitiesToProcess = $entitiesToProcess;
    }


    public function getMethod()
    {
        return 'POST';
    }

	use PayloadTrait;

}