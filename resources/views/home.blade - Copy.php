@include('layout.headerlink')
@include('layout.header')



<!--Body Sectio----->

<style>
    .tcb-product-slider {

        background-size: cover;
        background-repeat: no-repeat;
        padding: 100px 0;
    }

    .tcb-product-slider .carousel-control {
        width: 5%;
    }

    .tcb-product-item a {
        color: #147196;
    }

    .tcb-product-item a:hover {
        text-decoration: none;
    }

    .tcb-product-item .tcb-hline {
        margin: 10px 0;
        height: 1px;
        background: #ccc;
    }

    @media all and (max-width: 768px) {
        .tcb-product-item {
            margin-bottom: 30px;
        }
    }

    .tcb-product-photo {
        text-align: center;
        height: 180px;
        background: #fff;
    }

    .tcb-product-photo img {
        height: 100%;
        display: inline-block;
    }

    .tcb-product-info {
        background: #f0f0f0;
        padding: 15px;
    }

    .tcb-product-title h4 {
        margin-top: 0;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    .tcb-product-rating {
        color: #acacac;
    }

    .tcb-product-rating .active {
        color: #FFB500;
    }

    .tcb-product-price {
        color: firebrick;
        font-size: 18px;
    }



    .details {
        margin: 50px 0;
    }

    .details h1 {
        font-size: 32px;
        text-align: center;
        margin-bottom: 3px;
    }

    .details .back-link {
        text-align: center;
    }

    .details .back-link a {
        display: inline-block;
        margin: 20px 0;
        padding: 15px 30px;
        background: #333;
        color: #fff;
        border-radius: 24px;
    }

    .details .back-link a svg {
        margin-right: 10px;
        vertical-align: text-top;
        display: inline-block;
    }
</style>


<div class="content-area">
    <div class="container">
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">

            <h2>Students Profile</h2>

        </div>

        <div class="tcb-product-slider">
            <div class="container">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <?php $count=0;?>
                        <div class="item active">
                            <div class="row">
                                @if(is_null($students))
                                <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <h3>No Any Students Profile</h3>
                                    </div>
                                </div>
                                @else
                                @foreach($students as $value)
                                <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <div class="tcb-product-photo">


                                            @if ($value['profile_photo']==null)
                                            <a href="#"><img src="{{ URL::asset('/resources/dist/img/how-work3.png')}}"
                                                    class="img-responsive" alt="a" /></a>
                                            {{--  <img src="{{ URL::asset('/resources/dist/img/how-work3.png')}}"
                                            style="height: 2800px; width: 2800px;" width="150px" height="150px"
                                            alt=""> --}}

                                            @else
                                            <a href="#"><img
                                                    src="{{ env('APP_URL') }}/dootell/uploads/Jobseeker/profile/{{ $value['profile_photo'] }}"
                                                    class="img-responsive" alt="a" /></a>
                                            {{--  <img src="{{ env('APP_URL') }}/dootell/uploads/Jobseeker/profile/{{ $value['profile_photo'] }}"
                                            style="height: 160px; width: 160px;" width="150px" height="150px"
                                            alt=""> --}}
                                            @endif



                                        </div>
                                        <div class="tcb-product-info">
                                            <div class="tcb-product-title">
                                                <h4><a href="#">{{ $value['full_name'] }}</a></h4>
                                            </div>
                                            <div class="tcb-product-rating">

                                                <a href="#">Specification :- {{ $value['specialization'] }}</a>
                                            </div>
                                            <div class="tcb-hline"></div>
                                            <div class="tcb-product-price" style="font-size: 12px">
                                                <span>Email :- {{ $value['email'] }}</span><br>
                                                <span>Mobile No. :- {{ $value['mobile'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                {{--  <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <div class="tcb-product-photo">
                                            <a href="#"><img src="https://i.imgur.com/Z7eqMnj.jpg"
                                                    class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="tcb-product-info">
                                            <div class="tcb-product-title">
                                                <h4><a href="#">Olympus Photo Camera </a></h4>
                                            </div>
                                            <div class="tcb-product-rating">
                                                <i class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i>
                                                <a href="#">(4,585 ratings)</a>
                                            </div>
                                            <div class="tcb-hline"></div>
                                            <div class="tcb-product-price">
                                                $ 495.00 (17% off)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <div class="tcb-product-photo">
                                            <a href="#"><img src="https://i.imgur.com/fCrZot6.jpg"
                                                    class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="tcb-product-info">
                                            <div class="tcb-product-title">
                                                <h4><a href="#">Coca Cola Bottle</a></h4>
                                            </div>
                                            <div class="tcb-product-rating">
                                                <i class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i>
                                                <a href="#">(245 ratings)</a>
                                            </div>
                                            <div class="tcb-hline"></div>
                                            <div class="tcb-product-price">
                                                $ 99.00 (21% off)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <div class="tcb-product-photo">
                                            <a href="#"><img src="https://i.imgur.com/kTmJp8W.jpg"
                                                    class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="tcb-product-info">
                                            <div class="tcb-product-title">
                                                <h4><a href="#">Jewel from Italy</a></h4>
                                            </div>
                                            <div class="tcb-product-rating">
                                                <i class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i>
                                                <a href="#">(345 ratings)</a>
                                            </div>
                                            <div class="tcb-hline"></div>
                                            <div class="tcb-product-price">
                                                $ 999.00 (33% off)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <div class="tcb-product-photo">
                                            <a href="#"><img src="https://i.imgur.com/sMwmKmh.jpg"
                                                    class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="tcb-product-info">
                                            <div class="tcb-product-title">
                                                <h4><a href="#">White Pepper</a></h4>
                                            </div>
                                            <div class="tcb-product-rating">
                                                <i class="active glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i>
                                                <a href="#">(45 ratings)</a>
                                            </div>
                                            <div class="tcb-hline"></div>
                                            <div class="tcb-product-price">
                                                $ 199.00 (37% off)
                                            </div>
                                        </div>
                                    </div>
                                </div>  --}}
                            </div>
                        </div>
                        {{--  <div class="item">
                            <div class="row">
                                <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <div class="tcb-product-photo">
                                            <a href="#"><img src="https://i.imgur.com/RuPhz54.jpg"
                                                    class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="tcb-product-info">
                                            <div class="tcb-product-title">
                                                <h4><a href="#">Belt Improted From Japan</a></h4>
                                            </div>
                                            <div class="tcb-product-rating">
                                                <i class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i>
                                                <a href="#">(2,125 ratings)</a>
                                            </div>
                                            <div class="tcb-hline"></div>
                                            <div class="tcb-product-price">
                                                $ 49.00 (40% off)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <div class="tcb-product-photo">
                                            <a href="#"><img src="https://i.imgur.com/e4ARfEJ.jpg"
                                                    class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="tcb-product-info">
                                            <div class="tcb-product-title">
                                                <h4><a href="#">Tomato</a></h4>
                                            </div>
                                            <div class="tcb-product-rating">
                                                <i class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i>
                                                <a href="#">(5 ratings)</a>
                                            </div>
                                            <div class="tcb-hline"></div>
                                            <div class="tcb-product-price">
                                                $ 9.00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <div class="tcb-product-photo">
                                            <a href="#"><img src="https://i.imgur.com/ZlchtwK.jpg"
                                                    class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="tcb-product-info">
                                            <div class="tcb-product-title">
                                                <h4><a href="#">Tape Line</a></h4>
                                            </div>
                                            <div class="tcb-product-rating">
                                                <i class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i>
                                                <a href="#">(215 ratings)</a>
                                            </div>
                                            <div class="tcb-hline"></div>
                                            <div class="tcb-product-price">
                                                $ 39.00 (15% off)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <div class="tcb-product-photo">
                                            <a href="#"><img src="https://i.imgur.com/GRPrGN6.jpg"
                                                    class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="tcb-product-info">
                                            <div class="tcb-product-title">
                                                <h4><a href="#">Test Glasses For Lab</a></h4>
                                            </div>
                                            <div class="tcb-product-rating">
                                                <i class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i>
                                                <a href="#">(10,345 ratings)</a>
                                            </div>
                                            <div class="tcb-hline"></div>
                                            <div class="tcb-product-price">
                                                $ 11,999.00 (37% off)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <div class="tcb-product-photo">
                                            <a href="#"><img src="https://i.imgur.com/Ds5mtGy.jpg"
                                                    class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="tcb-product-info">
                                            <div class="tcb-product-title">
                                                <h4><a href="#">Jewel From India</a></h4>
                                            </div>
                                            <div class="tcb-product-rating">
                                                <i class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i>
                                                <a href="#">(945 ratings)</a>
                                            </div>
                                            <div class="tcb-hline"></div>
                                            <div class="tcb-product-price">
                                                $ 299.00 (54% off)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <div class="tcb-product-photo">
                                            <a href="#"><img src="https://i.imgur.com/e7IYyso.jpg"
                                                    class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="tcb-product-info">
                                            <div class="tcb-product-title">
                                                <h4><a href="#">Red Pepper</a></h4>
                                            </div>
                                            <div class="tcb-product-rating">
                                                <i class="active glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i>
                                                <a href="#">(15 ratings)</a>
                                            </div>
                                            <div class="tcb-hline"></div>
                                            <div class="tcb-product-price">
                                                $ 5.00 (11% off)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <div class="tcb-product-photo">
                                            <a href="#"><img src="https://i.imgur.com/vuRE1W6.jpg"
                                                    class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="tcb-product-info">
                                            <div class="tcb-product-title">
                                                <h4><a href="#">Pro Cell Batteries </a></h4>
                                            </div>
                                            <div class="tcb-product-rating">
                                                <i class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i>
                                                <a href="#">(745 ratings)</a>
                                            </div>
                                            <div class="tcb-hline"></div>
                                            <div class="tcb-product-price">
                                                $ 19.00 (63% off)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="tcb-product-item">
                                        <div class="tcb-product-photo">
                                            <a href="#"><img src="https://i.imgur.com/UibcRla.jpg"
                                                    class="img-responsive" alt="a" /></a>
                                        </div>
                                        <div class="tcb-product-info">
                                            <div class="tcb-product-title">
                                                <h4><a href="#">Eye Glasses </a></h4>
                                            </div>
                                            <div class="tcb-product-rating">
                                                <i class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="active glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i><i
                                                    class="glyphicon glyphicon-star"></i>
                                                <a href="#">(145 ratings)</a>
                                            </div>
                                            <div class="tcb-hline"></div>
                                            <div class="tcb-product-price">
                                                $ 129.00 (29% off)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  --}}
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>











    </div>
    <hr>


    <div class="container">
        <div class="row page-title text-center wow bounce" data-wow-delay="1s">
            <h5>Recent Jobs</h5>
            <h2>Available jobs for you</h2>
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
                                <img src="{{ env('APP_URL') }}/dootell/uploads/Company/logo/{{ $value->logo }}"
                                    width="70px" height="70px" alt="">
                                @endif


                            </td>
                            <td class="tbl-title">
                                <h4>{{ $value->job_title }}<br><span class="job-type">{{ $value->keywords }}</span></h4>
                            </td>
                            <td>
                                <p>{{ $value->company_name }}</p>
                            </td>
                            <td>
                                <p>Vacancy</p>
                                <p>{{ $value->vacancies }}</p>
                            </td>
                            <td>
                                <p><i class="icon-location"></i>{{ $value->location }}</p>
                            </td>
                            <td>
                                <p>₹ Rs {{ $value->from_ctc }} - {{ $value->to_ctc }} PA</p>
                            </td>
                            <td class="tbl-apply"><a href="#"><i class="fa fa-eye"></i> </a></td>
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
                    <a href="http://ccmcchandrapur.com/dootell/package" target="_blank">Create a Account</a>
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
                            <img src="{{ env('APP_URL') }}/dootell/uploads/testimonial/{{ $test->image }}" width="88px"
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



<!--Body Sectio----->

</body>

</html>
