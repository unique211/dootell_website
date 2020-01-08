@include('layout.headerlink')
@include('layout.header')



<!--Body Sectio----->


<div class="content-area">


    <div class="container">
        <div class="row page-title text-center wow bounce" data-wow-delay="1s">
            <h5>Recent Jobs</h5>
            <h2>Available jobs for you</h2>
        </div>
        <div class="row jobs">
            <div class="col-md-12">
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

        </div>
    </div>





</div>


@include('layout.footer')
@include('layout.footerlink')



<!--Body Sectio----->

</body>

</html>
