<?php

namespace App\Http\Controllers;

use App\Models\TestUser;
use App\Models\UserData;
use Database\Seeders\UsersData;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index()
    {
        $result = UserData::all();
        return view ('results')->with('result', $result);

    }


//    public function destroy()
//    {
//        $result = UserData::all();
//        if($result != null){
//            UserData::truncate();
//        }
//    }



}
