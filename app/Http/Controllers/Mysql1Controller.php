<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class Mysql1Controller extends Controller
{
    //

    public function index(){

        dd(User::get());
        return "Hai";

    }
}
