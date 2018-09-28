<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2018/09/28
 * Time: 17:36
 */

namespace App\Service;


use App\Service\Model\User;
use Laravel\Socialite\Two\User as GithubUser;

class UserService
{
    protected $model;

    /**
     * UserService constructor.
     * @param $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function findByOauth(GithubUser $user):?User{
        return $this->model->where("github_id",$user->id)->first();
    }

    public function createByOauth(GithubUser $user){
        return $this->model->create([
            "github_id" => $user->id,
            "name" => $user->nickname,
            "email" => $user->email,
            "access_token" => $user->token,
            "refresh_token" => $user->refreshToken,
            "expires_in" => $user->expiresIn,
        ]);
    }


}
