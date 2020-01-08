<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect, Response;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $data1 = DB::table('jobseeker_register')
            ->select('jobseeker_register.*')
            // ->join('login_master', 'login_master.ref_id', '=', 'jobseeker_register.company_id')
            ->get();



        $cnt1 = count($data1);

        if ($cnt1 > 0) {
            $result = array();
            $email = "";
            $mobile = "";
            foreach ($data1 as $value) {
                $applied_by = $value->applied_by;

                if ($applied_by == "Consultancy") {

                    $data2 = DB::table('jobseeker_register')
                        ->select('jobseeker_register.*', 'login_master.email as con_email', 'consultancy_register.mobile as con_mobile')
                        ->join('login_master', 'login_master.ref_id', '=', 'jobseeker_register.consultancy_id')
                        ->join('consultancy_register', 'consultancy_register.id', '=', 'jobseeker_register.consultancy_id')
                        ->where('login_master.role', 'Consultancy')
                        ->first();

                    $email =  $data2->con_email;
                    $mobile = $data2->con_mobile;
                } else {
                    $email = $value->email;
                    $mobile = $value->mobile;
                }
                $result[] = array(
                    'profile_photo' => $value->profile_photo,
                    'full_name' => $value->full_name,
                    'email' => $email,
                    'mobile' => $mobile,
                    'specialization' => $value->specialization,
                    'id' => $value->id,
                );
            }
            $data['students'] = $result;
            //   $data['students'] = null;
        } else {
            $data['students'] = null;
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


        $data['title'] = "search_student";

        return view('search_student', $data);
    }
}