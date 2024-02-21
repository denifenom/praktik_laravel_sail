<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    //


    public function index(){

        //return "Redis";

        $user = User::find(1);

        //
        Redis::set('user1','asdf');
        $userRedis = Redis::get('user1');
        dd($userRedis);


        
        // Store data in Redis cache for 5 minutes
        Cache::put('user_1', $user->username, 5);


        // Get data Redis
        //$user = Cache::get('user_1');

        //dd($user->username);

    }



}
