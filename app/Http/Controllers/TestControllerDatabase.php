<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestControllerDatabase extends Controller
{
    public  function index(){
////        $jobs = DB::table('jobs')->get();
//        $jobs = DB::table('jobs')->where('name', 'agent')->first();
//        return $jobs;

//        $names = DB::table('jobs')->pluck('name');
//
//        foreach ($names as $name) {
//            echo $name;
//        }

//        $jobs = DB::table('jobs')->count();
//        return  $jobs;


//        if (DB::table('jobs')->where('name', 'agent')->exists()) {
//           echo  'yse';
//        }
//        else
//        {
//            echo 'no';
//        }

//        $users = DB::table('jobs')
//            ->select('name as user_email')
//            ->get();
//
//        return $users;
//        DB::table('users')->where('votes', '>', 100)->dd();




Storage::disk('local')->put('example.txt', 'Contents');

    }
}
