<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;

use App\Service\UserService;
use Illuminate\Support\Facades\Auth;
use App\Service\GithubAPIService;

Route::pattern('provider', 'github');

Route::get('/', function()
{
    return view('index');
});

Route::get('authorize', function()
{
    return \Socialite::with("github")->redirect();
});

Route::get('login_back', function(UserService $userService)
{
    $userData = Socialite::with("github")->user();

    if(!$user = $userService->findByOauth($userData)){
        $user = $userService->createByOauth($userData);
    }
    Auth::login($user);

    return redirect('/repositories');
});


Route::get('/repositories', function(GithubAPIService $service)
{
    return view('repositories');
    $repositories = $service->getRepositories();
    dd($repositories);



});

Route::get('/pr/{owner}/{repo}', function(GithubAPIService $service)
{
    return view('pullrequests');
});

Route::get('/scheduler/{owner}/{repo}', function(GithubAPIService $service)
{
    return view('scheduler');
});

