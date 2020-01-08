@include('layout.headerlink')
@include('layout.header')



<!--Body Sectio----->


<div class="content-area">
    <div class="container">
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">

            <h2>Job Details</h2>

        </div>
        {{--  <div class="row border-prmary" style="border:1px;">
            <div class="col-lg-12">
                <div class="col-lg-3">
                    <img src="https://placeholdit.imgix.net/~text?txtsize=38&txt=400%C3%97400&w=400&h=400"
                        class="w-100">
                </div>
                <div class="col-lg-9">

                </div>

            </div>
        </div>  --}}


        @if(is_null($job_details))
        <div class="row how-it-work" style=" border: 1px solid #333a40; padding: 5px; ">

            <div class="card">

                <div class="col-md-12">
                    <h3 class="card-title"><b>No Data</b></h3>
                </div>



            </div>


        </div>
        @else
        <?php $currency="";
        $post="";
        $app_from="";
        $app_to="";

        ?>
        @foreach($job_details as $value)

        <div class="row how-it-work" style=" border: 1px solid #333a40; padding: 5px; ">

            <div class="card">
                <div class="col-md-12">
                    <h3 class="card-title" style="text-align: center"><b>{{ $value->company_name }}</b></h3>
                </div>

                <div class="col-md-6">
                    <?php
                   if ($value->ctc=="Rs")
                    $currency="₹";
                    else
                    $currency="$";


                    $arr = explode('-', $value->post_date);
                    $post = $arr[2].'/'.$arr[1].'/'.$arr[0];

                    $arr = explode('-', $value->date_from);
                    $app_from = $arr[2].'/'.$arr[1].'/'.$arr[0];


                    $arr = explode('-', $value->date_to);
                    $app_to = $arr[2].'/'.$arr[1].'/'.$arr[0];

                    ?>



                    <p class="card-text">Job Post Date :- {{ $post }}</p>
                    <p class="card-text">Job Title/ Designation :- {{ $value->job_title }}</p>
                    <p class="card-text">Job Description :- {{ $value->description }}</p>
                    <p class="card-text">Keywords :- {{ $value->keywords }}</p>
                    <p class="card-text">Work Experience :- {{ $value->experience_from }} Years</p>
                    <p class="card-text">Annual CTC :-
                        {{ $currency }}{{ $value->from_ctc }} - {{ $currency }}{{ $value->to_ctc }} Lakhs
                    </p>
                    <p class="card-text">No. of Vacancies :- {{ $value->vacancies }}</p>
                    {{--  @if ($value->logo==null)
                    <img src="{{ URL::asset('/resources/dist/img/job-logo1.png')}}" style="height: 300px; width:
                    300px;"
                    alt="">


                    @else
                    <img src="{{ env('APP_URL') }}/dootell/uploads/Jobseeker/profile/{{ $value->logo }}"
                        style="height: 300px; width: 300px;" alt="">
                    @endif --}}

                </div>
                <div class="col-md-6 px-3">
                    <div class="card-block px-3">

                        <p class="card-text">Job Location :- {{ $value->location }}</p>
                        <p class="card-text">Industry :- {{ $value->industry }}</p>
                        <p class="card-text">Qualification :- {{ $value->qualification }}</p>
                        <p class="card-text">E-mail Id :- {{ $value->email }}</p>
                        <p class="card-text">Venue :- {{ $value->venue }}</p>
                        <p class="card-text">Date :- From: {{ $app_from }} To: {{ $app_to }}</p>


                    </div>
                </div>


            </div>


        </div>
        @endforeach
        @endif
        {{--  @if(is_null($students))
            <div class="col-md-12">
                <div class="single-work  wow fadeInUp" data-wow-delay="0.9s">

                    <h3>No Any Jobseeker Profile</h3>

                </div>
            </div>
            @else
            @foreach($students as $value)
            <div class="col-md-3">
                <div class="single-work wow fadeInUp" data-wow-delay="0.8s">


                    @if ($value['profile_photo']==null)
                    <img src="{{ URL::asset('/resources/dist/img/how-work3.png')}}" style="height: 160px; width:
        160px;"
        width="150px" height="150px" alt="">

        @else
        <img src="{{ env('APP_URL') }}/dootell/uploads/Jobseeker/profile/{{ $value['profile_photo'] }}"
            style="height: 160px; width: 160px;" width="150px" height="150px" alt="">
        @endif

        <h3>{{ $value['full_name'] }}</h3>
        <span>Specification :- {{ $value['specialization'] }}</span>
        <br><br><br>

        <span>Email :- {{ $value['email'] }}</span><br>
        <span>Mobile No. :- {{ $value['mobile'] }}</span>
    </div>
</div>
@endforeach
@endif --}}
{{--  <div class="col-md-3">
                <div class="single-work  wow fadeInUp" data-wow-delay="0.9s">
                    <img src="{{ URL::asset('/resources/dist/img/how-work2.png')}}" alt="">
<h3>Searching for the best job</h3>
<p>Using the outcomes from the job, we will put together a plan for the most effective marketing
    strategy to get the best results.</p>
</div>
</div>
<div class="col-md-3">
    <div class="single-work  wow fadeInUp" data-wow-delay="0.9s">
        <img src="{{ URL::asset('/resources/dist/img/how-work2.png')}}" alt="">
        <h3>Searching for the best job</h3>
        <p>Using the outcomes from the job, we will put together a plan for the most effective marketing
            strategy to get the best results.</p>
    </div>
</div>

<div class="col-md-3">
    <div class="single-work wow fadeInUp" data-wow-delay="1s">
        <img src="{{ URL::asset('/resources/dist/img/how-work3.png')}}" alt="">
        <h3>Searching for the best job</h3>
        <p>Using the outcomes from the job, we will put together a plan for the most effective marketing
            strategy to get the best results.</p>
    </div>
</div> --}}
</div>
</div>
<hr>






</div>


@include('layout.footer')
@include('layout.footerlink')



<!--Body Sectio----->

</body>

</html>
