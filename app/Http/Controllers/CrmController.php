<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrmController extends Controller
{

    public function index(Request $request){

        $data = file_get_contents("https://deskplan.lv/muita/app.json");

        $users = json_decode($data, true);


        return view('welcome');
    }

}
