<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class addDist extends Controller
{
    public function insertform(){
        return view('addDistributors');
        }
        public function insert(Request $request){
        $name = $request->input('name');
        $country = $request->input('country');
        $mobile = $request->input('mobile');
        $email = $request->input('email');
        $data=array('name'=>$name,"country"=>$country,"mobile"=>$mobile,"email"=>$email);
        DB::table('distributors')->insert($data);
        
        }
        }

