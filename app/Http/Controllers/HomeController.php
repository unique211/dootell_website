<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect, Response;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data1 = DB::table('jobseeker_register')
            ->select('jobseeker_register.*')
            // ->join('login_master', 'login_master.ref_id', '=', 'jobseeker_register.company_id')
            ->inRandomOrder()
            ->limit(4)
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

        $job = DB::table('company_job_post')
            ->select('company_job_post.*', 'company_register.company_name', 'company_register.logo')
            ->join('company_register', 'company_register.id', '=', 'company_job_post.company_id')
            // ->join('login_master', 'login_master.ref_id', '=', 'jobseeker_register.company_id')
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

        $testimonials = DB::table('testimonials_master')
            ->select('testimonials_master.*')
            ->get();
        $cnt3 = count($slider);
        if ($cnt3 > 0) {
            $data['testimonials'] = $testimonials;
        } else {
            $data['testimonials'] = null;
        }
        $data['title'] = "home";

        return view('home', $data);
    }
    public function search_jobs(Request $request)
    {

        $designation = $request->designation;
        $experience = $request->experience;
        $education = $request->education;
        $location = $request->location;

        $where1 = "";





        $job = DB::table('company_job_post')
            ->select('company_job_post.*', 'company_register.company_name', 'company_register.logo')
            ->join('company_register', 'company_register.id', '=', 'company_job_post.company_id');

        if ($designation != "") {
            $designation=trim(strtoupper($designation));
            $job =  $job->where('job_title', $designation);
        }

        if ($experience != "") {
            $experience=trim(strtoupper($experience));
            $job =  $job->where('experience_from', $experience);
        }
        if ($education != "") {
            $education=trim(strtoupper($education));
            $job =  $job->where('qualification', $education);
        }
        if ($location != "") {
            $location=trim(strtoupper($location));
             $split = explode(",", $location);
             $job =  $job->whereIn('location', $split);
         //   $job =  $job->where('location', $location);
        }

        $job = $job->get();
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

    public function search_students(Request $request)
    {

        $specialization = $request->specialization;
        $skills = $request->skills;
        $education = $request->education;
        $location = $request->location;
        // dd($location);
        // $split = explode(",", $location);


        $where1 = "";

        $student = DB::table('jobseeker_register')
            ->select('jobseeker_register.*');

        if ($specialization != "") {
            $specialization=trim(strtoupper($specialization));
            $student =  $student->where('specialization', $specialization);
        }

        if ($skills != "") {
            $skills=trim(strtoupper($skills));
            $student =  $student->where('skill', $skills);
        }
        if ($education != "") {
            $education=trim(strtoupper($education));
            $student =  $student->where('education', $education);
        }
        if ($location != "") {
            $location=trim(strtoupper($location));
            $split = explode(",", $location);


            $student =  $student->whereIn('int_job_location', $split);
          //  $student =  $student->where('int_job_location', $location);
        }

        $student = $student->get();
        $cnt2 = count($student);
        if ($cnt2 > 0) {
            $result = array();
            $email = "";
            $mobile = "";
            foreach ($student as $value) {
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
    public function student_details($id)
    {

        $data1 = DB::table('jobseeker_register')
            ->select('jobseeker_register.*')
            ->where('jobseeker_register.id', $id)
            ->get();
        $cnt = count($data1);
        if ($cnt > 0) {
            $data['student'] = $data1;
        } else {
            $data['student'] = null;
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

        $data['title'] = "student";

        return view('student_details', $data);
    }

    public function job_details($id)
    {

        $data1 = DB::table('company_job_post')
            ->select('company_job_post.*', 'company_register.company_name', 'company_register.logo')
            ->join('company_register', 'company_register.id', '=', 'company_job_post.company_id')
            ->where('company_job_post.id', $id)
            ->get();


        $cnt = count($data1);
        if ($cnt > 0) {
            $data['job_details'] = $data1;
        } else {
            $data['job_details'] = null;
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

        $data['title'] = "job_details";

        return view('job_details', $data);
    }
}
