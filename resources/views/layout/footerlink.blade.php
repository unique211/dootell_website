<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


<script>
    var user="<?php echo url('/')?>";

    window.jQuery || document.write('<script src="'+user+'/resources/dist/js/vendor/jquery-1.10.2.min.js"><\/script>')


</script>
<script type="text/javascript" src="{{ URL::asset('/resources/dist/js/vendor/jquery-1.10.2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/resources/dist/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('/resources/dist/js/owl.carousel.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('/resources/dist/js/wow.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/resources/dist/js/main.js') }}"></script>



<script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });


        });
        var search_jobs="{{ url('search_jobs') }}";


</script>
<script type='text/javascript' src="{{ URL::asset('/resources/js/myjs/jobs.js') }}">
</script>
