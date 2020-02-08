@include('layout.headerlink')
@include('layout.header')



<!--Body Sectio----->


<div class="content-area">

    <div class="container">
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">
            <div class="col-lg-6">
                <h2>Don&#39;t Have a Company Account?</h2>
                <a href="{{ env('APP_URL1') }}/company_package" target="_blank" class="btn btn-danger">Click
                    Here
                    To
                    Register</a>
            </div>
            <div class="col-lg-6" style=" border: 0.5px solid #333a40; padding:5px">
                <div class="text-left">
                    1. Register in a company to upload vacancies and get a skilled employees.
                    <br>
                    2. keep record of employees in pocket.
                    <br>

                    3. keep coustmers outstanding records in pocket.



                </div>
            </div>



        </div>
        @if(is_null($employees))

        @else
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">

            <h2>Company Profile</h2>

        </div>
        <div class="row how-it-work text-center">

            @foreach($employees as $value)
            <div class="col-md-3">
                <div class="single-work wow fadeInUp" data-wow-delay="0.8s">

                    <a href="{{ url('company_jobs') }}/{{ $value->id }}">
                        @if ($value->logo==null)
                        <img src="{{ URL::asset('/resources/dist/img/how-work3.png')}}"
                            style="height: 160px; width: 160px;" width="150px" height="150px" alt="">

                        @else
                        <img src="{{ env('APP_URL1') }}/uploads/Company/logo/{{ $value->logo }}"
                            style="height: 160px; width: 160px;" width="150px" height="150px" alt="">
                        @endif
                    </a>

                    <h3>{{ $value->company_name }}</h3>
                    <span>Industry Type :- {{ $value->industry_type }}</span>
                    <br><br><br>

                    <span><i class="fa fa-envelope"></i> {{ $value->email }}</span><br>
                    <span><i class="fa fa-mobile"></i> {{ $value->mobile }}</span>
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
