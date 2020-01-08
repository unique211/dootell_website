<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect, Response;

class ConsultancyController extends Controller
{
    public function index(Request $request)
    {


        $data1 = DB::table('consultancy_register')
            ->select('consultancy_register.*', 'login_master.email')
            ->join('login_master', 'login_master.ref_id', '=', 'consultancy_register.id')
            ->where('role', 'Consultancy')
            ->get();


        $cnt1 = count($data1);

        if ($cnt1 > 0) {


            $data['consultancy'] = $data1;
            //   $data['students'] = null;
        } else {
            $data['consultancy'] = null;
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


        $data['title'] = "consultancy";


        //return Response::json($data);
        return view('consultancy', $data);
    }
}