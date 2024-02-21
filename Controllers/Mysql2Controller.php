<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;


class Mysql2Controller extends Controller
{
    //
    public function index(){

    $data = DB::connection('mysql_2')->table('users')->get();

    dd($data);

        return "Mysql 2";

    }

}
