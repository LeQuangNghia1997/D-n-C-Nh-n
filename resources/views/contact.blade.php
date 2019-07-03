<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->


    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <script src="{{ asset('frontend/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flexslider.min.js') }}"></script>
    @include('page.nav')
    <style>
        html, body {
            height: 100%;
            /*background: url(http://thuthuatphanmem.vn/uploads/2018/05/18/hinh-nen-full-hd-1080-bai-bien-dep_022853660.jpg) fixed;*/
            background-size: cover;
        }


        img {
            max-width: 100%;
            height: auto;
        }

        ul li {
            list-style: none
        }

        a, a:hover {
            text-decoration: none;
            box-shadow: none;
            outline: none;
            -moz-transition: all 0.2s ease-in;
            -o-transition: all 0.2s ease-in;
            -webkit-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
        }

        h1 {
            text-align: center;
            margin: 30px 0;
            color: #fff;
        }

        .hls_sol li {
            width: 25%;
            max-width: 100%;
            display: inline-block;
            float: left;
            text-align: center;
            overflow: hidden;
            position: relative;
            height: 400px;
        }

        .hls_sol li img {
            height: 100%;
        }

        .hls_sol ul {
            padding: 0;
            display: flow-root;
        }

        .hls_sol li:hover img {
            -moz-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }

        .hls_sol li img {
            -webkit-transition: transform 0.5s ease;
            -o-transition: transform 0.5s ease;
            transition: transform 0.5s ease;
        }

        .hls_sol .hls_sol_data {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            transition: 0.3s ease-in-out;
            background: rgba(0, 0, 0, 0.28);
            visibility: hidden
        }

        .hls_sol ul li:hover .hls_sol_data {
            background: rgba(0, 0, 0, 0.51);
            transition: 0.3s ease-in-out;
            visibility: visible
        }

        .hls_data {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 60px 20px;
        }

        .hls_data a {
            display: block;
        }

        .hls_title {
            text-align: right;
            font-size: 22px;
            border-bottom: 2px solid #7db4ff;
            padding: 10px 0;
            margin: 10px 0;
            color: #fff;
        }

        .hls_title:hover {
            color: #fff;
        }

        .hls_sol_data h3 {
            color: #fff;
            transition: 0.5s
        }

        .hls_sol_data:hover h3 {
            transition: 0.5s ease;
            margin-top: 100px;
        }

        .btn-pro {
            border-radius: 0;
            color: #222;
            background: #fff;
            display: inline-block !important;
            float: right;
        }

        .btn-pro:hover {
            color: #fff;
            background: #355c79;
        }

        .sec_title {
            text-align: center;
            margin: 30px 0 30px;
        }

        .hls_data {
            left: unset;
            right: -310px;
            transition: 1s ease
        }

        .hls_sol_data:hover .hls_data {
            left: 0;
            right: 0;
            transition: 1s ease
        }

        .house-detail {
            margin-top: 200px;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#template-navbar">
@include('page.container')
<div class="house-detail">
    @if(count($tables)==0)
        <h5 class="text-capitalize text-center mt-5">Hiện tại đang hết bàn </h5>
    @else

        <div class="house-detail">
            {{--<h1>{{$tables->name}}</h1>--}}
            <div class="hls_sol">
                <ul>
                    @foreach($tables as $key =>$table)
                        @if($table->status == '1')
                            <a href="{{route('show.reservation',$table->id)}}" class="tableList">
                                <li>
                                    <img src="{{asset("storage/$table->image")}}"
                                         class="card-img-top img-fluid"
                                         alt="..."  width="200px" height="150px">
                                    <div class="hls_sol_data">
                                        <h3>{{$table->name}}</h3>
                                        <div class="hls_data">
                                            <p href="#" class="btn btn-pro">
                                            <div>
                                                {{--<input id="input-1" name="input-1" data-min="0" data-max="5" data-show-caption="false" data-step="0.1"  data-size="xs" disabled="">--}}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </a>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>
<!--footer-->
<div class="footer">
    <div class="container">
        <div class="footer-head">
            <div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                <ul class=" in">
                    <li><a href="index.html">Home</a></li>
                    <li><a  href="menu.html">Menu</a></li>
                    <li><a  href="blog.html">Blog</a></li>
                    <li><a  href="events.html">Events</a></li>
                    <li><a  href="contact.html">Contact</a></li>
                </ul>
                <span>There are many variations of passages</span>
            </div>
            <div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h2>Follow Us</h2>
                <label><i class="glyphicon glyphicon-menu-up"></i></label>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
                <ul class="social-ic">
                    <li><a href="#"><i></i></a></li>
                    <li><a href="#"><i class="ic"></i></a></li>
                    <li><a href="#"><i class="ic1"></i></a></li>
                    <li><a href="#"><i class="ic2"></i></a></li>
                    <li><a href="#"><i class="ic3"></i></a></li>
                </ul>

            </div>
            <div class="clearfix"> </div>

        </div>
        <p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Cookery . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
</div>
<!--//footer-->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.mixitup.min.js') }}" ></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.hoverdir.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jQuery.scrollSpeed.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
    @endforeach
@endif

<script>
    $(function () {
        $('#datetimepicker1').datetimepicker({
            format: "dd MM yyyy - HH:11 P",
            showMeridian: true,
            autoclose: true,
            todayBtn: true
        });
    })
</script>
{{--{!! Toastr::message() !!}--}}
</body>
</html>
