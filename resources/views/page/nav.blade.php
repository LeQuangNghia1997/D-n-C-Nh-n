<link href="{{ asset('css/jquery.icomoon.css')}}" rel="stylesheet">
<link href="{{ asset('css/style.css')}}" rel="stylesheet">
<script src=" {{ asset('js/jquery/bootstrap-datepicker.js') }}"></script>
<!DOCTYPE html>
<html>
<head>
    <title>Nhà Hàng Sông Hồng</title>
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    {{--<script src="js/jquery.min.js"></script>--}}
    <script src=" {{ asset('js/jquery/jquery.min.js') }}"></script>

    <!-- Custom Theme files -->
    <!--theme-style-->
{{--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />--}}

<!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!---->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <link href="{{ asset('js/move-top.js')}}" rel="stylesheet">
    <link href="{{ asset('js/easing.js')}}" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">



    <link href="{{ asset('css/component.css')}}" rel="stylesheet">

    <!-- animation-effect -->
    <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet">

    <link href="{{ asset('js/wow.min.js')}}" rel="stylesheet">

    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->

</head>
