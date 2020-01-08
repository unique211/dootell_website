<div class="footer-area">
    <div class="container">
        <div class="row footer">
            <div class="col-md-4">
                <div class="single-footer">
                    <img src="{{ URL::asset('/resources/dist/img/dootell.png')}}" style="width:60%;height: 60%" alt=""
                        class="wow pulse" data-wow-delay="1s">

                </div>
            </div>
            {{--  <div class="col-md-4">
                <div class="single-footer">
                    <h4>Twitter update</h4>
                    <div class="twitter-updates">
                        <div class="single-tweets">
                            <h5>ABOUT 9 HOURS</h5>
                            <p><strong>AGOMeet Aldous</strong> - a Brave New World for #rails with more cohesion, less
                                coupling and greater dev speed <a
                                    href="http://t.co/rsekglotzs">http://t.co/rsekglotzs</a></p>
                        </div>
                        <div class="single-tweets">
                            <h5>ABOUT 9 HOURS</h5>
                            <p><strong>AGOMeet Aldous</strong> - a Brave New World for #rails with more cohesion, less
                                coupling and greater dev speed <a
                                    href="http://t.co/rsekglotzs">http://t.co/rsekglotzs</a></p>
                        </div>
                    </div>
                </div>
            </div>  --}}
            <div class="col-md-4">
                <div class="single-footer">
                    <h4>Useful Links</h4>
                    <div class="footer-links">
                        <ul class="list-unstyled">
                            <li><a class="<?php if($title=='home'){ echo 'active';}  ?> " href="{{ url('/') }}">Home</a>
                            </li>

                            <li><a class="<?php if($title=='jobseeker'){ echo 'active';}  ?>"
                                    href="{{ url('jobseeker') }}">Job
                                    Seekers</a></li>
                            <li><a class="<?php if($title=='employees'){ echo 'active';}  ?>"
                                    href="{{ url('employees') }}">Employees</a></li>
                            <li><a class="<?php if($title=='subscriber'){ echo 'active';}  ?>"
                                    href="{{ url('subscriber') }}">Subscriber</a></li>
                            <li><a href="{{ url('/') }}">Contact</a></li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-copy">


            <p style="text-align:center"><span>©Copyright 2019</span> | <span>Developed by <a
                        href="http://www.zodiactechsoft.com/">Zodiactech
                        Software &amp; IT Services Pvt. Ltd.</a></span> </p>
        </div>
    </div>
</div>
