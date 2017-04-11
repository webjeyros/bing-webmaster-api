<?php

namespace bingWebmaster\actions;


class GetUserSites implements ActionInterface
{
    use ApiNameTrait;






    public function getMethod()
    {
        return 'GET';
    }

	use PayloadTrait;




}