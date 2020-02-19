@include('layout.headerlink')
@include('layout.header')



<!--Body Sectio----->


<div class="content-area">
    <div class="container">
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">

            <h2>Job Details</h2>

        </div>


        @if(is_null($job_details))
        <div class="row how-it-work" style=" border: 1px solid #333a40; padding: 5px; ">

            <div class="card">

                <div class="col-md-12">
                    <h3 class="card-title"><b>No Data</b></h3>
                </div>



            </div>


        </div>
        @else
        <?php $currency="";
        $post="";
        $app_from="";
        $app_to="";

        ?>
        @foreach($job_details as $value)

        <div class="row how-it-work" style=" border: 1px solid #333a40; padding: 5px; ">

            <div class="card">
                <div class="col-md-12">
                    <h3 class="card-title" style="text-align: center"><b>{{ $value->company_name }}</b></h3>
                </div>

                <div class="col-md-6">
                    <?php
                   if ($value->ctc=="Rs")
                    $currency="₹";
                    else
                    $currency="$";


                    $arr = explode('-', $value->post_date);
                    $post = $arr[2].'/'.$arr[1].'/'.$arr[0];

                    $arr = explode('-', $value->date_from);
                    $app_from = $arr[2].'/'.$arr[1].'/'.$arr[0];


                    $arr = explode('-', $value->date_to);
                    $app_to = $arr[2].'/'.$arr[1].'/'.$arr[0];

                    ?>



                    <p class="card-text">Job Post Date :- {{ $post }}</p>
                    <p class="card-text">Job Title/ Designation :- {{ $value->job_title }}</p>
                    <p class="card-text">Job Description :- {{ $value->description }}</p>
                    <p class="card-text">Keywords :- {{ $value->keywords }}</p>
                    <p class="card-text">Work Experience :- {{ $value->experience_from }} Years</p>
                    <p class="card-text">Annual CTC :-
                        {{ $currency }}{{ $value->from_ctc }} - {{ $currency }}{{ $value->to_ctc }} Lakhs
                    </p>
                    <p class="card-text">No. of Vacancies :- {{ $value->vacancies }}</p>


                </div>
                <div class="col-md-6 px-3">
                    <div class="card-block px-3">

                        <p class="card-text">Job Location :- {{ $value->location }}</p>
                        <p class="card-text">Industry :- {{ $value->industry }}</p>
                        <p class="card-text">Qualification :- {{ $value->qualification }}</p>
                        <p class="card-text">E-mail Id :- {{ $value->email }}</p>
                        <p class="card-text">Venue :- {{ $value->venue }}</p>
                        <p class="card-text">Date :- From: {{ $app_from }} To: {{ $app_to }}</p>


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
