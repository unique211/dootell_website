@include('layout.headerlink')
@include('layout.header')



<!--Body Sectio----->


<div class="content-area">
    <div class="container">
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">

            <h2>Job Seekers Details</h2>

        </div>



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

    </div>
</div>
<hr>






</div>


@include('layout.footer')
@include('layout.footerlink')



<!--Body Sectio----->

</body>

</html>
