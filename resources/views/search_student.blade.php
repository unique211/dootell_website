@include('layout.headerlink')
@include('layout.header')



<!--Body Sectio----->


<div class="content-area">
    <div class="container">
        @if(is_null($students))

        @else

        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">

            <h2>Job Seekers Profile</h2>

        </div>
        <div class="row how-it-work text-center">

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

                    <span><i class="fa fa-envelope"></i> {{ $value['email'] }}</span><br>
                    <span><i class="fa fa-mobile"></i> {{ $value['mobile'] }}</span>
                </div>
            </div>
            @endforeach


        </div>
        @endif
    </div>
    <hr>






</div>


@include('layout.footer')
@include('layout.footerlink')



<!--Body Sectio----->

</body>

</html>
