<?php

namespace bingWebmaster;


use GuzzleHttp\ClientInterface;
use bingWebmaster\actions\ActionInterface;

class client
{

    protected $apiKey;

    protected $client;

    protected $endpoint='https://ssl.bing.com/webmaster/api.svc/json/';

    /**
     * client constructor.
     */

    public function __construct($apiKey, ClientInterface $client)
    {
        $this->apiKey=$apiKey;

        $this->client=$client;

    }

    protected function cast($response)
    {
        if (is_object($response)){

            $class=stristr($response->__type, ':', true);
            $class =__NAMESPACE__ .'\classes\\'.$class;
            return new $class($response);

        }
        else
        {   if (empty($response)) return [];
            $class=stristr($response[0]->__type, ':', true);
            $class =__NAMESPACE__ .'\classes\\'.$class;
            return array_map(function($item) use ($class){
                return new $class($item);
            },$response);
        }

    }

    public function request(ActionInterface $action)
    {

        $query['apikey']=$this->apiKey;
        $json=null;

        if($action->getMethod()==='GET'){

            $query=array_merge($query,$action->getPayload());

        }else{

            $json=$action->getPayload();
        }


            $response=json_decode($this->client->request(
                $action->getMethod(),$this->endpoint.$action->getApiName(),[
                    'query' =>$query,
                    'json'  =>$json,
                ]
            )->getBody())->d;



        if (is_array($response) || is_object($response)) $response=$this->cast($response);

        return $response;
    }
}