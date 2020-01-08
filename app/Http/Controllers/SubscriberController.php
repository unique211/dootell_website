<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect, Response;

class SubscriberController extends Controller
{
    public function index(Request $request)
    {


        $data1 = DB::table('subscriber_register')
            ->select('subscriber_register.*', 'login_master.email')
            ->join('login_master', 'login_master.ref_id', '=', 'subscriber_register.id')
            ->where('role', 'Subscriber')
            ->get();


        $cnt1 = count($data1);

        if ($cnt1 > 0) {


            $data['subscriber'] = $data1;
            //   $data['students'] = null;
        } else {
            $data['subscriber'] = null;
        }



        $slider = DB::table('slider_master')
            ->select('slider_master.*')
            ->get();
        $cnt3 = count($slider);
        if ($cnt3 > 0) {
            $data['slider'] = $slider;
        } else {
            $data['slider'] = null;
        }


        $data['title'] = "subscriber";


        //return Response::json($data);
        return view('subscriber', $data);
    }
}