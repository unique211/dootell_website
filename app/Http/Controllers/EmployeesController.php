<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect, Response;


class EmployeesController extends Controller
{
    public function index(Request $request)
    {


        $data1 = DB::table('company_register')
            ->select('company_register.*', 'login_master.email')
            ->join('login_master', 'login_master.ref_id', '=', 'company_register.id')
            ->where('login_master.role', 'Company')
            ->get();


        $cnt1 = count($data1);

        if ($cnt1 > 0) {


            $data['employees'] = $data1;
            //   $data['students'] = null;
        } else {
            $data['employees'] = null;
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


        $data['title'] = "employees";


        //return Response::json($data);
        return view('employees', $data);
    }
    public function company_jobs($id)
    {


        $job = DB::table('company_job_post')
            ->select('company_job_post.*', 'company_register.company_name', 'company_register.logo')
            ->join('company_register', 'company_register.id', '=', 'company_job_post.company_id')
            ->where('company_job_post.company_id', $id)
            ->get();


        $cnt2 = count($job);
        if ($cnt2 > 0) {
            $data['job_post'] = $job;
        } else {
            $data['job_post'] = null;
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

        $data['title'] = "jobpost";


        return view('search_jobs', $data);
    }
}