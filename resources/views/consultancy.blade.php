@include('layout.headerlink')
@include('layout.header')



<!--Body Sectio----->


<div class="content-area">
    <div class="container">
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">
            <div class="col-lg-6">
                <h2>Don&#39;t Have a Consultancy Account?</h2>
                <a href="{{ env('APP_URL1') }}/consultancy_package" target="_blank" class="btn btn-danger">Click
                    Here
                    To
                    Register</a>
            </div>
            <div class="col-lg-6" style=" border: 0.5px solid #333a40; padding:5px">
                <div class="text-left">
                    1. Upload multi resumes of your candidates.
                    <br>
                    2. Modernise your business.

                </div>
            </div>



        </div>
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">

            <h2>Consultancy Profile</h2>

        </div>

    </div>
    <hr>


    <div class="row how-it-work text-center">
        @if(is_null($consultancy))
        <div class="col-md-12">
            <div class="single-work  wow fadeInUp" data-wow-delay="0.9s">

                <h3>No Any Employees Profile</h3>

            </div>
        </div>
        @else
        @foreach($consultancy as $value)
        <div class="col-md-3">
            <div class="single-work wow fadeInUp" data-wow-delay="0.8s">

                {{--  {{ Request::segment(1) }} --}}
                @if ($value->upload_image==null)
                <img src="{{ URL::asset('/resources/dist/img/con_img.png')}}" style="height: 160px; width: 160px;"
                    width="150px" height="150px" alt="">

                @else
                <img src="{{ env('APP_URL1') }}/uploads/consultancy/{{ $value->upload_image }}"
                    style="height: 160px; width: 160px;" width="150px" height="150px" alt="">
                @endif

                <h3>{{ $value->cunsultancy_name }}</h3>
                {{--  <span>Designation :- {{ $value->designation }}</span> --}}
                <br><br><br>

                <span>Email :- {{ $value->email }}</span><br>
                <span>Mobile No. :- {{ $value->mobile }}</span>
            </div>
        </div>
        @endforeach
        @endif

    </div>



</div>


@include('layout.footer')
@include('layout.footerlink')



<!--Body Sectio----->

</body>

</html>
