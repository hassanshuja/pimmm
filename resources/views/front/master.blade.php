<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Title -->
    <title>sugarandspice Catering</title>
    <!-- Meta Description Tag -->
    <meta name="Description" content="Klinik is a HTML5 & CSS3 responsive template">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/x-icon" href="/images/favicon.png" />
    <!-- Font Awesoeme Stylesheet CSS -->
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css" />
    <!-- Google web Font -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,500">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Material Design Lite Stylesheet CSS -->
    <link rel="stylesheet" href="/css/material.min.css" />
    <!-- Material Design Select Field Stylesheet CSS -->
    <link rel="stylesheet" href="/css/mdl-selectfield.min.css">
    <!-- Owl Carousel Stylesheet CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css" />
    <!-- Animate Stylesheet CSS -->
    <link rel="stylesheet" href="/css/animate.min.css" />
    <!-- Magnific Popup Stylesheet CSS -->
    <link rel="stylesheet" href="/css/magnific-popup.css" />
    <!-- Flex Slider Stylesheet CSS -->
    <link rel="stylesheet" href="/css/flexslider.css" />
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Fresca&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300&display=swap" rel="stylesheet">

    <!-- Custom Main Stylesheet CSS -->
    <link rel="stylesheet" href="/css/style1.css">
    <!---arabic
    <link rel="stylesheet" href="/css/bootstrap-rtl.min.css">-->
</head>
<body>
<!-- Start Header -->

<header id="header">
    <!-- Start Header Top Section -->
    <div id="hdr-top-wrapper">
        <div class="layer-stretch hdr-top">
            <div class="hdr-top-block hidden-xs">
                <div id="hdr-social">
                    <ul class="social-list social-list-sm">
                        <li><a class="width-auto font-13">Follow Us : </a></li>
                        <li><a href="#" target="_blank" id="hdr-facebook" ><i class="fa fa-facebook" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-facebook">Facebook</span></li>
                        <li><a href="#" target="_blank" id="hdr-instagram" ><i class="fa fa-instagram" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-instagram">Instagram</span></li>
                    </ul>
                </div>
            </div>
            <div class="hdr-top-line hidden-xs"></div>
            <div class="hdr-top-block hdr-number">
                <div class="font-13">
                    <i class="fa fa-mobile font-20 tbl-cell"> </i> <span class="hidden-xs tbl-cell"> Call Now : </span> <span class="tbl-cell">+966 50 601 7766</span>
                </div>
            </div>
            <div class="hdr-top-line hidden-xs"></div>
            @yield('header')
f
        </div>
    </div><!-- End Header Top Section -->
    <!-- Start Main Header Section -->
    <div id="hdr-wrapper">
        <div class="layer-stretch hdr">
            <div class="tbl">
                <div class="tbl-row">
                    <!-- Start Header Logo Section -->
                    <div class="tbl-cell hdr-logo">
                        <a href="/home"><img src="/images/logo1.png" alt=""></a>
                    </div><!-- End Header Logo Section -->
                    <div class="tbl-cell hdr-menu">
                        <!-- Start Menu Section -->
                        <ul class="menu">
                            @foreach($menus as $menu)
                                @if($menu->type==1)
                                    <li>
                                        <a id="menu-home" class="mdl-button mdl-js-button mdl-js-ripple-effect">{{$menu->name}} <i class="fa fa-chevron-down"></i></a>
                                        <ul class="menu-dropdown">
                                            @foreach($menu->pages as $paged)
                                                <li><a href="/page/{{$paged->id}}">{{$paged->name}}</a></li>
                                            @endforeach


                                        </ul>
                                    </li>
                                @endif

                                @if($menu->type==2)
                                    <li class="menu-megamenu-li">
                                        <a id="menu-pages" class="mdl-button mdl-js-button mdl-js-ripple-effect">{{$menu->name}} <i class="fa fa-chevron-down"></i></a>
                                        <ul class="menu-megamenu">
                                            <li class="row">
                                                @php($index=0)
                                                @foreach($menu->branches as $branch)
                                                    {{$index}}
                                                    @if($index==0 || $index % 2 == 0)

                                                        <div class="col-lg-3">


                                                            <ul>
                                                                <div class="megamenu-ttl">{{$branch->name}}</div>
                                                                @foreach($branch->pages as $page)
                                                                    <li><a href="/page/{{$page->id}}">{{$page->name}}</a></li>
                                                                @endforeach

                                                                @if($index == (count($menu->branches)-1))
                                                            </ul>
                                                        </div>
                                                    @endif

                                                    @else



                                                        <div class="megamenu-ttl">{{$branch->name}}</div>
                                            @foreach($branch->pages as $page)
                                                <li><a href="/page/{{$page->id}}">{{$page->name}}</a></li>
                                            @endforeach
                                        </ul>

                    </div>
                    @endif

                    @php($index+=1)
                    @endforeach

                    <div class="col-lg-3">
                        <div class="theme-img">
                            <img src="{{URL::asset('storage/app/public/attachment/' . $menu->photo)}}" alt="">
                        </div>
                    </div>
                    </li>
                    </ul>
                    </li>

                    @endif

                    @endforeach

                    @foreach($pages as $paged)
                        <li><a href="/page/{{$paged->id}}" id="menu-shortcodes" class="mdl-button mdl-js-button mdl-js-ripple-effect">{{$page->name}}</a></li>

                    @endforeach

                    <li><a href="/about_us" id="menu-shortcodes" class="mdl-button mdl-js-button mdl-js-ripple-effect">About Us</a></li>
                    <li><a href="/contact_us" id="menu-shortcodes" class="mdl-button mdl-js-button mdl-js-ripple-effect">Contact Us</a></li>

                    <li>
                    </li>
                    <li class="mobile-menu-close"><i class="fa fa-times"></i></li>
                    </ul><!-- End Menu Section -->
                    <div id="menu-bar"><a><i class="fa fa-bars"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    </div><!-- End Main Header Section -->
</header><!-- End Header -->
@yield('content')

<div id="appointment" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title">pickup-order</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="appointment-error"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-user-o"></i>
                            <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="appointment-name">
                            <label class="mdl-textfield__label" for="appointment-name">Name</label>
                            <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-envelope-o"></i>
                            <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="appointment-email">
                            <label class="mdl-textfield__label" for="appointment-email">Email</label>
                            <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                            <i class="fa fa-phone"></i>
                            <input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="appointment-mobile">
                            <label class="mdl-textfield__label" for="appointment-mobile">Mobile Number</label>
                            <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">

                            <i class="fa fa-key"></i>
                            <label for="pick-order">order text</label>
                            <textarea class="form-control rounded-0" id="pick-order" rows="3"></textarea>

                        </div>
                    </div>
                </div>
                <div class="text-center pt-4">
                    <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-primary button-lg make-appointment">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Make an Appointment Modal -->
<div id="appointment-button" class="animated fadeInUp">
    <button id="appointment-now" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-button--raised"><i class="fa fa-plus"></i></button>
    <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="appointment-now">PickUp orders</div>
</div><!-- End Fixed Appointment Button at Bottom -->
<!-- Start Footer Section -->
<div id="emergency">
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="layer-ttl">
                <h3>Contact Now </h3>
            </div>
            <div class="layer-container">
                <div class="paragraph-medium paragraph-black">
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.
                </div>
                <div class="emergency-number">Call Now : +966 50 601 7766</div>
            </div>
        </div>
    </div>
</div>
<footer id="footer">
    <div class="layer-stretch">
        <!-- Start main Footer Section -->
        <div class="row layer-wrapper">
            <div class="col-md-4 footer-block">
                <div class="footer-ttl"><p>Basic Info</p></div>
                <div class="footer-container footer-a">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell"><i class="fa fa-map-marker"></i></div>
                            <div class="tbl-cell">
                                <p class="paragraph-medium paragraph-white">
                                    takhasosoy,
                                    Riyadh,
                                    Saudi Arabia
                                </p>
                            </div>
                        </div>
                        <div class="tbl-row">
                            <div class="tbl-cell"><i class="fa fa-phone"></i></div>
                            <div class="tbl-cell">
                                <p class="paragraph-medium paragraph-white">+966 50 601 7766</p>
                            </div>
                        </div>
                        <div class="tbl-row">
                            <div class="tbl-cell"><i class="fa fa-envelope"></i></div>
                            <div class="tbl-cell">
                                <p class="paragraph-medium paragraph-white">info@sugarnspicesa.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-block">
                <div class="footer-ttl"><p>Quick Links</p></div>
                <div class="footer-container footer-b">
                    <div class="tbl">
                        <div class="tbl-row">
                            <ul class="tbl-cell">
                                <li><a href="#">menu</a></li>
                                <li><a href="#">catringtheme</a></li>
                                <li><a href="#">Pickup orders</a></li>


                            </ul>
                            <ul class="tbl-cell">
                                <li><a href="#">About-us</a></li>
                                <li><a href="#">Our Clients</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-block">
                <div class="footer-ttl"><p>FOLLOW US</p></div>
                <div class="footer-container footer-c">

                    <ul class="social-list social-list-colored footer-social">
                        <li>
                            <a href="#" target="_blank" id="footer-facebook" class="fa fa-facebook"></a>
                            <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-facebook">Facebook</span>
                        </li>


                        <li>
                            <a href="#" target="_blank" id="footer-instagram" class="fa fa-instagram"></a>
                            <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-instagram">Instagram</span>
                        </li>




                    </ul>
                </div>
            </div>
        </div>
    </div><!-- End main Footer Section -->
    <!-- Start Copyright Section -->
    <div id="copyright">
        <div class="layer-stretch">
            <div class="paragraph-medium paragraph-white">2019 © sugarandspice CATERING - RIYADH SUADI ARABIA ALL RIGHTS RESERVED.</div>
        </div>
    </div><!-- End of Copyright Section -->
</footer><!-- End of Footer Section -->

<!-- **********Included Scripts*********** -->

<!-- Jquery Library 2.1 JavaScript-->
<script src="/js/jquery-2.1.4.min.js"></script>
<!-- Popper JavaScript-->
<script src="/js/popper.min.js"></script>
<!-- Bootstrap Core JavaScript-->
<script src="/js/bootstrap.min.js"></script>
<!-- Material Design Lite JavaScript-->
<script src="/js/material.min.js"></script>
<!-- Material Select Field Script -->
<script src="/js/mdl-selectfield.min.js"></script>
<!-- Flexslider Plugin JavaScript-->
<script src="/js/jquery.flexslider.min.js"></script>
<!-- Owl Carousel Plugin JavaScript-->
<script src="/js/owl.carousel.min.js"></script>
<!-- Scrolltofixed Plugin JavaScript-->
<script src="/js/jquery-scrolltofixed.min.js"></script>
<!-- Magnific Popup Plugin JavaScript-->
<script src="/js/jquery.magnific-popup.min.js"></script>
<!-- WayPoint Plugin JavaScript-->
<script src="/js/jquery.waypoints.min.js"></script>
<!-- CounterUp Plugfin JavaScript-->
<script src="/js/jquery.counterup.js"></script>
<!-- SmoothScroll Plugin JavaScript-->
<script src="/js/smoothscroll.min.js"></script>
<!--Custom JavaScript for Klinik Template-->
<script src="/js/custom.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-93901876-1', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
f
