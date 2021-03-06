
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Slux +</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">


    <!-- Slide image view product -->
    <link href="{{asset('js/slide-image/thumbnail-slider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('js/slide-image/ninja-slider.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/slide-image/thumbnail-slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/slide-image/ninja-slider.js')}}" type="text/javascript"></script>
    <!-- End Slide image view product -->

    <link rel="stylesheet" href="{{asset('css/thumbnails.carousel.css')}}">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{asset('css/superfish.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/styleProcedure.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog-list.css')}}">
    <link rel="stylesheet" href="{{asset('css/recommend-product.css')}}">
    <link rel="stylesheet" href="{{asset('css/view-product-item.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- <script src="{{asset('js/carousel.js')}}"></script> -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('js/serviceSlux.js')}}"></script>
    <script src="{{asset('js/sidebar.js')}}"></script>
    <!-- <script src="{{asset('js/feedbackSlux.js')}}"></script> -->
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- css view-product-item -->
    <link rel="canonical" href="https://codepen.io/AttilaBre/pen/RKjaeB?depth=everything&order=popularity&page=15&q=product&show_forks=false" />
    <script src="https://use.fontawesome.com/f12e4a6b3c.js"></script>
    <!-- css view-product-item -->
    
    </head>
    <body>
        <div id="fh5co-wrapper">
            <div id="fh5co-page">
                <div id="fh5co-header">
                    @include('frontEndUser.layout.header')
                </div>

                <!-- end:fh5co-header -->
                <div id="fh5co-slide-header">
                    @yield('slide-header')
                </div>
                
                
                <div class="page-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div id='ninja-slider'>
                                    <div>
                                        <div class="slider-inner">
                                            <ul>
                                                <li><a class="ns-img" href="http://dienthoaidangcap.vn/product_images/d/081/vertu-moi-signature-rose-gold-2016-01__14489_thumb.png"></a></li>
                                                <li><a class="ns-img" href="http://dienthoaidangcap.vn/product_images/y/261/vertu-pure-chocolate-dai-dien-04__80953_thumb.jpg"></a></li>
                                                <li><a class="ns-img" href="http://dienthoaidangcap.vn/product_images/n/971/vertu-moi-signature-pure-black-2016-01__67680_thumb.png"></a></li>
                                                <li><a class="ns-img" href="http://dienthoaidangcap.vn/product_images/y/406/vertu-moi-signature-stainless-steel-black-leather-2017-01__29305_thumb.png"></a></li>
                                                <li><a class="ns-img" href="http://dienthoaidangcap.vn/product_images/d/081/vertu-moi-signature-rose-gold-2016-01__14489_thumb.png"></a></li>
                                                
                                            </ul>
                                            <div class="fs-icon" title="Expand/Close"></div>
                                        </div>
                                        <div id="thumbnail-slider">
                                            <div class="inner">
                                                <ul>
                                                    <li>
                                                        <a class="thumb" href="http://dienthoaidangcap.vn/product_images/d/081/vertu-moi-signature-rose-gold-2016-01__14489_thumb.png"></a>
                                                    </li>
                                                    <li>
                                                        <a class="thumb" href="http://dienthoaidangcap.vn/product_images/y/261/vertu-pure-chocolate-dai-dien-04__80953_thumb.jpg"></a>
                                                    </li>
                                                    <li>
                                                        <a class="thumb" href="http://dienthoaidangcap.vn/product_images/n/971/vertu-moi-signature-pure-black-2016-01__67680_thumb.png"></a>
                                                    </li>
                                                    <li>
                                                        <a class="thumb" href="http://dienthoaidangcap.vn/product_images/y/406/vertu-moi-signature-stainless-steel-black-leather-2017-01__29305_thumb.png"></a>
                                                    </li>
                                                    <li>
                                                        <a class="thumb" href="http://dienthoaidangcap.vn/product_images/d/081/vertu-moi-signature-rose-gold-2016-01__14489_thumb.png"></a>
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <!-- bootstrap carousel -->
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                  <!-- Indicators -->
                                  <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                  </ol>

                                  <!-- Wrapper for slides -->
                                  <div class="carousel-inner">

                                    <div class="item active srle">
                                      <img src="https://s28.postimg.org/4237b0cjh/image.jpg" alt="1.jpg" class="img-responsive">
                                      <div class="carousel-caption">
                                        <p> 1.jpg </p>
                                      </div>
                                    </div>

                                    <div class="item">
                                      <img src="https://s29.postimg.org/xaf064313/image.jpg" alt="2.jpg" class="img-responsive">
                                      <div class="carousel-caption">
                                        <p> 2.jpg </p>
                                      </div>
                                    </div>

                                    <div class="item">
                                      <img src="https://s17.postimg.org/sv1x15jlb/image.jpg" alt="3.jpg" class="img-responsive">
                                      <div class="carousel-caption">
                                        <p> 3.jpg </p>
                                      </div>
                                    </div>

                                    <div class="item">
                                      <img src="https://s7.postimg.org/4z602gd8b/image.jpg" alt="4.jpg" class="img-responsive">
                                      <div class="carousel-caption">
                                        <p> 4.jpg </p>
                                      </div>
                                    </div>

                                  </div>

                                  <!-- Controls -->
                                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                  </a>
                                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                  </a>

                                  <!-- Thumbnails --> 
                                  <ul class="thumbnails-carousel clearfix">
                                        <li><img src="https://s2.postimg.org/h6uti3zud/1_tn.jpg" alt="1_tn.jpg"></li>
                                        <li><img src="https://s27.postimg.org/n4fjr7q2n/2_tn.jpg" alt="1_tn.jpg"></li>
                                        <li><img src="https://s29.postimg.org/afuhmf61f/3_tn.jpg" alt="1_tn.jpg"></li>
                                        <li><img src="https://s29.postimg.org/p45dxi6hf/4_tn.jpg" alt="1_tn.jpg"></li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    @include('frontEndUser.page-content.information')
                    
                </div>

                <div class="footer">
                    @include('frontEndUser.layout.footer')
                </div>
            </div>
            <!-- END fh5co-page -->

        </div>
        <!-- END fh5co-wrapper -->

        <!-- jQuery -->

        
        <script src="{{asset('js/thumbnails.carousel.js')}}"></script>
        <script>
            $('.thumbnails-carousel').thumbnailsCarousel();
        </script>
        <!-- SwiperEffect Js-->
        
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js'></script>
        <script type="text/javascript" src="{{asset('js/carousel.js')}}"></script>
        
        <!-- SwiperEffect Js-->

        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- jQuery Easing -->
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Waypoints -->
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <!-- Superfish -->
        <script src="{{asset('js/hoverIntent.js')}}"></script>
        <script src="{{asset('js/superfish.js')}}"></script>
        <!-- Flexslider -->
        <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
        <!-- Stellar -->
        <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
        <!-- Counters -->
        <script src="{{asset('js/jquery.countTo.js')}}"></script>

        <!-- Main JS (Do not remove) -->
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/procedure.js')}}"></script>
    </body>
</html>

