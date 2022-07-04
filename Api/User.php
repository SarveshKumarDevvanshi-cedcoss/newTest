<?php

namespace App\Testwebapi\Api;

Class User extends \App\Apiconnect\Api\Base
{

    protected $_component = "User";

    public function getCurrentUser($params)
    {
        $shopId = $this->di->getRegistry()->getCurrentShop();
        // $client = new \GuzzleHttp\Client();
        // $request = $client->request(
        //     'GET',
        //     "https://".$shopId["shop_url"]."/admin/api/2022-01/shop.json",
        //     [
        //         "headers" => ["X-Shopify-Access-Token" => $shopId["token"]["access_token"]],
        //         'http_errors' => false
        //     ]
        // );
        // $response = json_decode($request->getBody()->getContents(), true);
        return [
            'success' => true,
            'data'    => $params
        ];
    }
    public function get($params){

        try {
            if ( ! $this->di->getRegistry()->getCurrentShop() ) {
                return [
                    'success' => false,
                    'msg'     => 'Oops! Shop ID not found'
                ];
            }

            $response = ["Hello"];
            return [
                'success' => true,
                'data'    => $response
            ];
        } catch ( \Exception $e ) {
            return [
                'success' => false,
                'data' => $e->getMessage()
            ];
        }
    }

}