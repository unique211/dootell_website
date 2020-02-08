@include('layout.headerlink')
@include('layout.header')



<!--Body Sectio----->


<div class="content-area">
    <div class="container">
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">
            <div class="col-lg-6">
                <h2>Don&#39;t Have a Subscriber Account?</h2>
                <a href="{{ env('APP_URL1') }}/subscriber_register" target="_blank" class="btn btn-danger">Click
                    Here
                    To
                    Subscribe</a>
            </div>
            <div class="col-lg-6" style=" border: 0.5px solid #333a40; padding:5px">
                <div class="text-left">
                    1. Subscribe to your favorite groups.
                    <br>
                    2. Assurance of privacy.
                    <br>
                    3. Assurance of been connected with original pages.
                    <br>
                    4. Pages not available for non subscribers.
                </div>
            </div>



        </div>

    </div>
    <hr>




</div>


@include('layout.footer')
@include('layout.footerlink')



<!--Body Sectio----->

</body>

</html>
