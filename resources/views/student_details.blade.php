@include('layout.headerlink')
@include('layout.header')



<!--Body Sectio----->


<div class="content-area">
    <div class="container">
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">

            <h2>Job Seekers Details</h2>

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


        @if(is_null($student))
        <div class="row how-it-work" style=" border: 1px solid #333a40; padding: 5px; ">

            <div class="card">

                <div class="col-md-12">
                    <h3 class="card-title"><b>No Data</b></h3>
                </div>



            </div>


        </div>
        @else
        @foreach($student as $value)

        <div class="row how-it-work" style=" border: 1px solid #333a40; padding: 5px; ">

            <div class="card">

                <div class="col-md-4">
                    @if ($value->profile_photo==null)
                    <img src="{{ URL::asset('/resources/dist/img/how-work3.png')}}" style="height: 300px; width: 300px;"
                        alt="">

                    @else
                    <img src="{{ env('APP_URL1') }}/uploads/Jobseeker/profile/{{ $value->profile_photo }}"
                        style="height: 300px; width: 300px;" alt="">
                    @endif

                </div>
                <div class="col-md-8 px-3">
                    <div class="card-block px-3">
                        <h3 class="card-title"><b>{{ $value->full_name }}</b></h3>
                        <p class="card-text">Education :- {{ $value->education }}</p>
                        <p class="card-text">Specialization :- {{ $value->specialization }}</p>
                        <p class="card-text">University :- {{ $value->board }}</p>
                        <p class="card-text">Passing Year :- {{ $value->passing_year }}</p>
                        <p class="card-text">Grade/Marks :- {{ $value->marks }}</p>
                        <p class="card-text">Experience :- {{ $value->experience }}</p>
                        <p class="card-text">Home Town :- {{ $value->hometown }}</p>
                        @if ($value->resume_doc==null)
                        <a href="#" class="btn btn-primary">View Resume</a><span style="color:red">(Resume Not
                            Available)</span>

                        @else
                        <a href="{{ env('APP_URL1') }}/uploads/Jobseeker/resume/{{ $value->resume_doc }}"
                            target="_blank" class="btn btn-primary">View Resume</a>
                        @endif

                        <br>
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
