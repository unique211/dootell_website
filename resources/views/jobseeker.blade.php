@include('layout.headerlink')
@include('layout.header')



<!--Body Sectio----->


<div class="content-area">
    <div class="container">
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">
            <div class="col-lg-6">
                <h2>Don&#39;t Have a Jobseeker Account?</h2>
                <a href="{{ env('APP_URL1') }}/jobseeker_package" target="_blank" class="btn btn-danger">Click
                    Here
                    To
                    Register</a>
            </div>
            <div class="col-lg-6" style=" border: 0.5px solid #333a40; padding:5px">
                <div class="text-left">
                    1. Register as job seeker for posting resumes.
                    <br>
                    2. Opportunities are waiting to reach you.
                </div>
            </div>



        </div>
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">

            <h2>Job Seekers Profile</h2>

        </div>
        <div class="row how-it-work text-center">
            @if(is_null($students))
            <div class="col-md-12">
                <div class="single-work  wow fadeInUp" data-wow-delay="0.9s">

                    <h3>No Any Jobseeker Profile</h3>

                </div>
            </div>
            @else
            @foreach($students as $value)
            <div class="col-md-3">
                <div class="single-work wow fadeInUp" data-wow-delay="0.8s">

                    {{--  {{ Request::segment(1) }} --}}<a href="{{ url('student_details') }}/{{ $value['id'] }}">
                        @if ($value['profile_photo']==null)
                        <img src="{{ URL::asset('/resources/dist/img/how-work3.png')}}"
                            style="height: 160px; width: 160px;" width="150px" height="150px" alt="">

                        @else
                        <img src="{{ env('APP_URL1') }}/uploads/Jobseeker/profile/{{ $value['profile_photo'] }}"
                            style="height: 160px; width: 160px;" width="150px" height="150px" alt="">
                        @endif</a>

                    <h3>{{ $value['full_name'] }}</h3>
                    <span>Specification :- {{ $value['specialization'] }}</span>
                    <br><br><br>

                    <span>Email :- {{ $value['email'] }}</span><br>
                    <span>Mobile No. :- {{ $value['mobile'] }}</span>
                </div>
            </div>
            @endforeach
            @endif
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
{{--
<div class="container">
    <div class="row job-posting wow fadeInUp" data-wow-delay="1s">
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#job-seekers" aria-controls="home" role="tab"
                        data-toggle="tab">Job Seekers</a></li>
                <li role="presentation"><a href="#employeers" aria-controls="profile" role="tab"
                        data-toggle="tab">Employeers</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="job-seekers">
                    <ul class="list-inline job-seeker">
                        <li>
                            <a href="">
                                <img src="{{ URL::asset('/resources/dist/img/team-small-5.jpg')}}" alt="">
<div class="overlay">
    <h3>Ohidul Islam</h3>
    <p>Web Designer</p>
</div>
</a>
</li>
<li>
    <a href="">
        <img src="{{ URL::asset('/resources/dist/img/team-small-6.jpg')}}" alt="">
        <div class="overlay">
            <h3>Mohidul Islam</h3>
            <p>CEO</p>
        </div>
    </a>
</li>
<li>
    <a href="">
        <img src="{{ URL::asset('/resources/dist/img/team-small-3.jpg')}}" alt="">
        <div class="overlay">
            <h3>Unknown girl</h3>
            <p>Graphic Designer</p>
        </div>
    </a>
</li>
<li>
    <a href="">
        <img src="{{ URL::asset('/resources/dist/img/team-small-4.jpg')}}" alt="">
        <div class="overlay">
            <h3>Eftakher Alam</h3>
            <p>Graphic Designer</p>
        </div>
    </a>
</li>
<li>
    <a href="">
        <img src="{{ URL::asset('/resources/dist/img/team-small-2.jpg')}}" alt="">
        <div class="overlay">
            <h3>Mark Otto</h3>
            <p>Founder</p>
        </div>
    </a>
</li>
<li>
    <a href="">
        <img src="{{ URL::asset('/resources/dist/img/team-small-1.jpg')}}" alt="">
        <div class="overlay">
            <h3>Rasel Ahmed</h3>
            <p>Web Developer</p>
        </div>
    </a>
</li>
</ul>
</div>
<div role="tabpanel" class="tab-pane fade" id="employeers">
    <ul class="list-inline">
        <li>
            <a href="">
                <img src="{{ URL::asset('/resources/dist/img/employee4.png')}}" alt="">
                <div class="overlay">
                    <h3>Instagram</h3>
                </div>
            </a>
        </li>
        <li>
            <a href="">
                <img src="{{ URL::asset('/resources/dist/img/employee5.png')}}" alt="">
                <div class="overlay">
                    <h3>Microsoft</h3>
                </div>
            </a>
        </li>
        <li>
            <a href="">
                <img src="{{ URL::asset('/resources/dist/img/employee6.png')}}" alt="">
                <div class="overlay">
                    <h3>Dribbble</h3>
                </div>
            </a>
        </li>
        <li>
            <a href="">
                <img src="{{ URL::asset('/resources/dist/img/employee1.png')}}" alt="">
                <div class="overlay">
                    <h3>Beats Music</h3>
                </div>
            </a>
        </li>
        <li>
            <a href="">
                <img src="{{ URL::asset('/resources/dist/img/employee2.png')}}" alt="">
                <div class="overlay">
                    <h3>Facebook</h3>
                </div>
            </a>
        </li>
        <li>
            <a href="">
                <img src="{{ URL::asset('/resources/dist/img/employee3.png')}}" alt="">
                <div class="overlay">
                    <h3>Twitter</h3>
                </div>
            </a>
        </li>
    </ul>
</div>
</div>

</div>
</div>
</div>
<hr> --}}





</div>


@include('layout.footer')
@include('layout.footerlink')



<!--Body Sectio----->

</body>

</html>
