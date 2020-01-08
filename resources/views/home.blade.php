@include('layout.headerlink')
@include('layout.header')



<!--Body Sectio----->



<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }

    .carousel-showmanymoveone {
        .carousel-control {
            width: 4%;
            background-image: none;

            &.left {
                margin-left: 15px;
            }

            &.right {
                margin-right: 15px;
            }
        }

        .cloneditem-1,
        .cloneditem-2,
        .cloneditem-3 {
            display: none;
        }

        .carousel-inner {
            @media all and (min-width: 768px) {

                @media (transform-3d),
                (-webkit-transform-3d) {

                    >.item.active.right,
                    >.item.next {
                        transform: translate3d(50%, 0, 0);
                        left: 0;
                    }

                    >.item.active.left,
                    >.item.prev {
                        transform: translate3d(-50%, 0, 0);
                        left: 0;
                    }

                    >.item.left,
                    >.item.prev.right,
                    >.item.active {
                        transform: translate3d(0, 0, 0);
                        left: 0;
                    }
                }

                >.active.left,
                >.prev {
                    left: -50%;
                }

                >.active.right,
                >.next {
                    left: 50%;
                }

                >.left,
                >.prev.right,
                >.active {
                    left: 0;
                }

                .cloneditem-1 {
                    display: block;
                }
            }

            @media all and (min-width: 992px) {

                @media (transform-3d),
                (-webkit-transform-3d) {

                    >.item.active.right,
                    >.item.next {
                        transform: translate3d(25%, 0, 0);
                        left: 0;
                    }

                    >.item.active.left,
                    >.item.prev {
                        transform: translate3d(-25%, 0, 0);
                        left: 0;
                    }

                    >.item.left,
                    >.item.prev.right,
                    >.item.active {
                        transform: translate3d(0, 0, 0);
                        left: 0;
                    }
                }

                >.active.left,
                >.prev {
                    left: -25%;
                }

                >.active.right,
                >.next {
                    left: 25%;
                }

                >.left,
                >.prev.right,
                >.active {
                    left: 0;
                }

                .cloneditem-2,
                .cloneditem-3 {
                    display: block;
                }
            }
        }
    }


    // demo setup only, not needed for carousel
    .container {
        margin-bottom: 50px;
    }

    body {
        font-family: 'Bitter', sans-serif;
        color: #E54A41;
        background-image: url('//static.rtpdesign.co.uk/blog/img/background.png');
        background-repeat: no-repeat;
        background-position: right top;
        background-size: 20%;
    }

    p {
        font-family: 'Open Sans', sans-serif;
        color: #333;
        margin-bottom: 2em;
    }

    h2 {
        margin: 2em 0 1em;
    }

    .logo {
        margin: 20px auto;
        height: 100px;

        @media only screen and (min-width: 768px) {
            margin: 28px;
            float: left;
        }
    }

    .title {
        padding: 28px;
        display: table-cell;
        position: relative;
        vertical-align: middle;
        text-align: center;
    }
</style>


<div class="content-area">
    <div class="container">
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">

            <h2>Job Seekers Profile</h2>
            <div class="col-md-12 text-right" data-wow-delay="1s">

                <a href="{{ url('jobseeker') }}">View More Job Seekers Profile</a>

            </div>
        </div>


        <div class="row how-it-work text-center">

            @if(is_null($students))
            <div class="col-md-12">
                <div class="single-work  wow fadeInUp" data-wow-delay="0.9s">

                    <h3>No Any Job Seekers Profile</h3>

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


<div class="container">
    <div class="row page-title text-center wow bounce" data-wow-delay="1s">
        <h3>Recent Jobs</h3>
        <h1>Available jobs for you</h1>
    </div>
    <div class="row jobs">
        <div class="col-md-9">
            <div class="job-posts table-responsive">
                <table class="table">
                    @if(is_null($job_post))
                    <tr class="odd wow fadeInUp" data-wow-delay="1s">

                        <td class="tbl-title">
                            <h4>No Any Jobs Available</h4>
                        </td>
                        {{--  <td>
                            <p>dribbble community</p>
                        </td>
                        <td>
                            <p><i class="icon-location"></i>San Franciso, USA</p>
                        </td>
                        <td>
                            <p>&dollar; 14000</p>
                        </td>
                        <td class="tbl-apply"><a href="#">Apply now</a></td>  --}}
                    </tr>
                    @else
                    @foreach($job_post as $value)
                    <tr class="odd wow fadeInUp" data-wow-delay="1s">
                        <td class="tbl-logo">
                            {{-- <img src="{{ URL::asset('/resources/dist/img/job-logo1.png')}}" alt=""> --}}

                            @if ($value->logo==null)
                            <img src="{{ URL::asset('/resources/dist/img/job-logo1.png')}}" alt="">

                            @else
                            <img src="{{ env('APP_URL1') }}/uploads/Company/logo/{{ $value->logo }}" width="70px"
                                height="70px" alt="">
                            @endif


                        </td>
                        <td class="tbl-title">
                            <h4>{{ $value->job_title }}<br><span class="job-type">{{ $value->keywords }}</span></h4>
                        </td>
                        <td>
                            <p>{{ $value->company_name }}</p>
                        </td>
                        <td>
                            <p>Vacancy - <b>{{ $value->vacancies }}</b></p>

                        </td>
                        <td>
                            <p><i class="icon-location"></i>{{ $value->location }}</p>
                        </td>
                        <td>
                            <p>₹ Rs {{ $value->from_ctc }} - {{ $value->to_ctc }} PA</p>
                        </td>
                        <td class="tbl-apply"><a href="{{ url('job_details') }}/{{ $value->id }}"><i
                                    class="fa fa-eye"></i> </a></td>
                    </tr>
                    @endforeach
                    @endif

                </table>
            </div>
            <div class="more-jobs">
                <a href=""> <i class="fa fa-refresh"></i>View more jobs</a>
            </div>
        </div>
        <div class="col-md-3 hidden-sm">
            <div class="job-add wow fadeInRight" data-wow-delay="1.5s">
                <h2>Seeking a job?</h2>
                <a href="{{ env('APP_URL1') }}/package" target="_blank">Create a Account</a>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <div class="row page-title text-center  wow bounce" data-wow-delay=".7s">
        <h5>TESTIMONIALS</h5>
        <h2>WHAT PEOPLES ARE SAYING</h2>
    </div>
    <div class="row testimonial">
        <div class="col-md-12">
            <div id="testimonial-slider">
                @if(is_null($testimonials))
                <div class="item">
                    <div class="client-text">
                        <p>No Any Testimonial Available</p>

                    </div>
                    <div class="client-face wow fadeInRight" data-wow-delay=".9s">
                        <img src="{{ URL::asset('/resources/dist/img/how-work3.png')}}" width="88px" height="88px"
                            alt="">
                    </div>
                </div>
                @else
                @foreach($testimonials as $test)
                <div class="item">
                    <div class="client-text">
                        <p>{{ $test->description }}</p>
                        <h4><strong>{{ $test->title }}</strong></h4>
                    </div>
                    <div class="client-face wow fadeInRight" data-wow-delay=".9s">

                        @if ($test->image==null)
                        <img src="{{ URL::asset('/resources/dist/img/how-work3.png')}}" width="88px" height="88px"
                            alt="">

                        @else
                        <img src="{{ env('APP_URL1') }}/uploads/testimonial/{{ $test->image }}" width="88px"
                            height="88px" alt="">
                        @endif

                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </div>
</div>

</div>










@include('layout.footer')
@include('layout.footerlink')


<script>
    (function(){
    // setup your carousels as you normally would using JS
    // or via data attributes according to the documentation
    // https://getbootstrap.com/javascript/#carousel
    $('#carousel123').carousel({ interval: 2000 });
    $('#carouselABC').carousel({ interval: 3600 });
    }());

    (function(){
    $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<4;i++) {
         itemToClone=itemToClone.next(); // wrap around if at end of item collection
          if(!itemToClone.length) {
               itemToClone=$(this).siblings(':first');
            } // grab item, clone, add marker class, add to  collection
        itemToClone.children(':first-child').clone() .addClass("cloneditem-"+(i)) .appendTo($(this)); } }); }());
</script>


<!--Body Sectio----->

</body>

</html>
