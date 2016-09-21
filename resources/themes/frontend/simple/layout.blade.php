<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>@section('html_title'){{ $config::valueFor('html_title', config('app.name')) }}@show</title>
    <link href="{{$css_path}}/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{$css_path}}/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{$css_path}}/owl.carousel.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <script src="{{$js_path}}/jquery.min.js"></script>
    <script type="text/javascript" src="{{$js_path}}/bootstrap-3.1.1.min.js"></script>
    <!-- cart -->
    <script src="{{$js_path}}/simpleCart.min.js"></script>
    <!-- cart -->
</head>
<body>
<!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">

            <div class="top-right">
                <ul>
                    <li class="text"><a href="login.html">login</a></li>
                    <li>
                        <div class="cart box_1">
                            <a href="checkout.html">
                                <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity"
                                                                                     class="simpleCart_quantity"> 0 </span>)
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <!--/.content-->
            <div class="content white">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        {!! $logo ?? null !!}
                    </div>
                    <!--/.navbar-header-->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        {!! $navigation ?? null !!}
                    </div>
                    <!--/.navbar-collapse-->
                </nav>
                <!--/.navbar-->
            </div>
            <div class="search-box">
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Enter your search term..." type="search"
                               name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                    </form>
                </div>
            </div>

            <!-- search-scripts -->
            <script src="{{$js_path}}/classie.js"></script>
            <script src="{{$js_path}}/uisearch.js"></script>
            <script>
                new UISearch(document.getElementById('sb-search'));
            </script>
            <!-- //search-scripts -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--header-->

@yield('content')

<!--footer-->
<div class="footer-section">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-2 footer-grid">
                <h4>company</h4>
                <ul>
                    <li><a href="products.html">products</a></li>
                    <li><a href="#">Work Here</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Happenings</a></li>
                    <li><a href="#">Dealer Locator</a></li>
                </ul>
            </div>
            <div class="col-md-2 footer-grid">
                <h4>service</h4>
                <ul>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Warranty</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-2 footer-grid">
                <h4>order & returns</h4>
                <ul>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Shipping Policy</a></li>
                    <li><a href="#">Return Policy</a></li>
                    <li><a href="#">Digital Gift Card</a></li>
                </ul>
            </div>
            <div class="col-md-2 footer-grid">
                <h4>legal</h4>
                <ul>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Social Responsibility</a></li>
                </ul>
            </div>
            <div class="col-md-4 footer-grid1">
                <div class="social-icons">
                    <a href="#"><i class="icon"></i></a>
                    <a href="#"><i class="icon1"></i></a>
                    <a href="#"><i class="icon2"></i></a>
                    <a href="#"><i class="icon3"></i></a>
                    <a href="#"><i class="icon4"></i></a>
                </div>
                <p>Copyright &copy; 2015 Swim Wear. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-->

</body>
</html>