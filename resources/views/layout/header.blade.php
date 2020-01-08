<body>

    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Body content -->

    <div class="header-connect">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-8 col-xs-8">
                    <div class="header-half header-call">
                        <p>
                            <span><i class="fa fa-whatsapp"></i>+91 6283882828</span>
                            <span><i class="icon-mail"></i>customersupport@dootell.info</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-3  col-xs-offset-1">
                    <div class="header-half header-social">
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-vine"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ URL::asset('/resources/dist/img/dootell.png')}}"
                        style="margin-top:-20px;padding-bottom:40px;height:120px;" alt="Dootell"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="button navbar-right">
                    <a href="{{ url('subscriber') }}"><button class="navbar-btn nav-button wow bounceInRight login"
                            data-wow-delay="0.4s">Subscriber</button></a>

                    <a href="{{ env('APP_URL1') }}" target="_blank"><button
                            class="navbar-btn nav-button wow bounceInRight login"
                            data-wow-delay="0.8s">Login</button></a>
                    {{--  <button class="navbar-btn nav-button wow fadeInRight" data-wow-delay="0.6s">Sign up</button>  --}}
                </div>
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li class="wow fadeInDown" data-wow-delay="0s"><a
                            class="<?php if($title=='home'){ echo 'active';}  ?> " href="{{ url('/') }}">Home</a></li>
                    <li class="wow fadeInDown" data-wow-delay="0.1s"><a
                            class="<?php if($title=='jobseeker'){ echo 'active';}  ?>" href="{{ url('jobseeker') }}">Job
                            Seekers</a>
                    </li>
                    <li class="wow fadeInDown" data-wow-delay="0.2s"><a
                            class="<?php if($title=='employees'){ echo 'active';}  ?>"
                            href="{{ url('employees') }}">Company</a></li>

                    <li class="wow fadeInDown" data-wow-delay="0.3s"><a
                            class="<?php if($title=='consultancy'){ echo 'active';}  ?>"
                            href="{{ url('consultancy') }}">Consultancy</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="slider-area">
        <div class="slider">
            <div id="bg-slider" class="owl-carousel owl-theme">
                @if(is_null($slider))
                <div class="item"><img src="{{ URL::asset('/resources/dist/img/slider-image-3.jpg')}}"
                        alt="Mirror Edge"></div>
                @else
                @foreach($slider as $sld)
                <div class="item"><img src="{{ env('APP_URL1') }}/uploads/slider/{{ $sld->image }}" width="2000px"
                        height="864px"></div>

                @endforeach
                @endif


                {{-- <div class="item"><img src="{{ URL::asset('/resources/dist/img/slider-image-2.jpg')}}"
                alt="The Last of us">
            </div>
            <div class="item"><img src="{{ URL::asset('/resources/dist/img/slider-image-1.jpg')}}" alt="GTA V">
            </div> --}}

        </div>
    </div>
    @if($title=="home" || $title=="jobpost")
    <div class="container slider-content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2  col-md-offset-1 ">

                <h3><b>Introducing talent to opportunity!</b></h3>
                {{--  <b><b>Your Brand. Your Business. Our Support.</b></b>  --}}


                <style>
                    .bootstrap-select .bs-ok-default::after {
                        width: 0.3em;
                        height: 0.6em;
                        border-width: 0 0.1em 0.1em 0;
                        transform: rotate(45deg) translateY(0.5rem);
                    }

                    .btn.dropdown-toggle:focus {
                        outline: none !important;
                    }
                </style>
                <div class="search-form wow pulse" data-wow-delay="0.8s">

                    <fieldset>
                        <form action="{{ url('search_jobs') }}" method="POST">
                            @csrf
                            <h4 style="color: #E54A41;"><b>Search Jobs</b></h4>
                            <div class="col-md-3 col-sm-3 no-pad">
                                <input name="designation" type="text" id="designation" class="form-control border-right"
                                    placeholder="Skills, Designation">
                            </div>
                            <div class="col-md-2 col-sm-2 no-pad">
                                <input name="experience" type="text" id="" class="form-control border-right"
                                    placeholder="Experience">
                            </div>
                            <div class="col-md-3 col-sm-3 no-pad">
                                <input name="education" type="text" id="" class="form-control border-right"
                                    placeholder="Education">
                            </div>
                            <div class="col-md-3 col-sm-3 no-pad">
                                <input name="location" type="text" id="" class="form-control border-right"
                                    placeholder="Location">

                                {{--  <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm"
                                    class="selectpicker w-100">
                                    @if(is_null($job_location))
                                    <option value="">No Any Location Found</option>
                                    @else
                                    @foreach($job_location as $job)
                                    <div class="item"><img src="{{ env('APP_URL1') }}/uploads/slider/{{ $sld->image }}"
                                width="2000px" height="864px"></div>
                            <option value="{{ $job->location }}">{{ $job->location }}</option>
                            @endforeach
                            @endif
                            <option>United Kingdom</option>
                            <option>United States</option>
                            <option>France</option>
                            <option>Germany</option>
                            <option>Italy</option>
                            <option>Italy</option>
                            <option>Italy</option>
                            <option>Italy</option>
                            </select> --}}


                </div>
                <div class="col-md-1 col-sm-1 no-pad">
                    <button class="btn btn-danger" type="submit" id="btn_job_search" name="btn_job_search"><i
                            class="fa fa-search"></i></button>
                </div>
                </form>

                </fieldset>

            </div>
            <div class="wow zoomInDown" data-wow-delay="0.4s">
                <form action="{{ url('search_student') }}" method="POST">
                    @csrf

                    <button class=" btn btn-danger" style="margin-top: 20px" type="submit" id="btn_job_search"
                        name="btn_job_search">Click
                        here to
                        Search Job Seekers</button>
                </form>
            </div>

        </div>
    </div>
    </div>
    @elseif($title=="search_student")
    <div class="container slider-content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2  col-md-offset-1 ">

                <h3><b>Introducing talent to opportunity!</b></h3>
                {{--  <b><b>Your Brand. Your Business. Our Support.</b></b>  --}}



                <div class="search-form wow pulse" data-wow-delay="0.8s">

                    <fieldset>
                        <form action="{{ url('search_student') }}" method="POST">
                            @csrf
                            <h4 style="color: #E54A41;"><b>Search Job Seekers</b></h4>
                            <div class="col-md-3 col-sm-3 no-pad">
                                <input name="specialization" type="text" id="specialization"
                                    class="form-control border-right" placeholder="Specialization">
                            </div>
                            <div class="col-md-2 col-sm-2 no-pad">
                                <input name="skills" type="text" id="skills" class="form-control border-right"
                                    placeholder="Skills">
                            </div>
                            <div class="col-md-3 col-sm-3 no-pad">
                                <input name="education" type="text" id="" class="form-control border-right"
                                    placeholder="Education">
                            </div>
                            <div class="col-md-3 col-sm-3 no-pad">
                                <input name="location" type="text" id="" class="form-control border-right"
                                    placeholder="Location">
                                {{--  <select id="location2" name="location" class="form-control selectpicker">
                                    @if(is_null($job_location))
                                    <option value="">No Any Location Found</option>
                                    @else
                                    @foreach($job_location as $job)
                                    <div class="item"><img src="{{ env('APP_URL1') }}/uploads/slider/{{ $sld->image }}"
                                width="2000px" height="864px">
                            </div>
                            <option value="{{ $job->int_job_location }}">{{ $job->int_job_location }}</option>
                            @endforeach
                            @endif
                            <option>United Kingdom</option>
                            <option>United States</option>
                            <option>France</option>
                            <option>Germany</option>
                            <option>Italy</option>
                            <option>Italy</option>
                            <option>Italy</option>
                            <option>Italy</option>
                            </select> --}}
                </div>
                <div class="col-md-1 col-sm-1 no-pad">
                    <button class="btn btn-danger" type="submit" id="btn_job_search" name="btn_job_search"><i
                            class="fa fa-search"></i></button>
                </div>
                </form>

                </fieldset>

            </div>
            <div class="wow zoomInDown" data-wow-delay="0.4s">
                <form action="{{ url('search_jobs') }}" method="POST">
                    @csrf
                    <button class=" btn btn-danger" style="margin-top: 20px" type="submit" id="btn_job_search"
                        name="btn_job_search">Click
                        here to
                        Search Jobs</button>
                </form>
            </div>

        </div>
    </div>
    </div>
    @endif

    </div>
