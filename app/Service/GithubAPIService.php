<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2018/09/28
 * Time: 17:59
 */

namespace App\Service;


use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class GithubAPIService
{
    protected $client;

    /**
     * GithubAPIService constructor.
     * @param $client
     */
    public function __construct()
    {
    }

    protected function call($method,$uri,$params=[]){
        $token = Auth::user()->access_token;
        $options = [];
        $options["headers"] = [
            "Authorization" => "token $token",
        ];

        $uri = "https://api.github.com/{$uri}";

        $client = new Client();
        $response = $client->request($method,$uri,$options);
        return json_decode($response->getBody()->getContents(),true);


    }

    /**
     * @see https://developer.github.com/v3/repos/#list-your-repositories
     */
    public function getRepositories(){
        return $this->call("get","user/repos");
    }

}
