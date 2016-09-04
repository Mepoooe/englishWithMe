<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>EnglishWithMe</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="fonts/glyphicons-halflings-regular.svg">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    
    <link rel="stylesheet" media="screen" href="css/superfish.css" /> 
    <link rel="stylesheet" href="css/nivo-slider.css" media="all"  /> 
    <link rel="stylesheet" href="css/tweet.css" media="all"  />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="all" href="css/lessframework.css"/>
    
    
    <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
    <script src="js/modernizr-2.5.3.min.js"></script>
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <!-- WRAPPER -->
    <div class="wrapper cf">
    
    
        <header class="cf">
            
            <!-- social-bar and users -->
            <div id="social-bar-holder">
                <div class="row">
                    
                    @if (Auth::guest())
                        <div class="col-md-9">
                            <a href="#" class="user_hello">
                                Hello 
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="user_firstBtn btn btn-warning" href="{{ url('/login') }}">Login</a>
                            <a class="user_regLogout btn btn-success" href="{{ url('/register') }}">Register</a>
                        </div>
                    @else
                    
                    <div class="col-md-9">
                            <a href="#" class="user_hello">
                               Hello, {{ Auth::user()->name }}!</span>
                            </a>
                    </div>
                    <div class="col-md-3">
                        <a class="user_firstBtn btn btn-danger" href="{{ url('/logout') }}">Logout</a>
                        @if (Auth::user()->is_admin)
                            <a class="user_regLogout btn btn-success" href="{{ url('/adminka') }}">Adminka</a>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
            <div class="cf"></div>
            <!-- ENDS social-bar -->
            
            <div id="logo" class="cf">
                <a href="/" ><img src="img/logo.png" alt="" /></a>
            </div>
            
            <!-- nav -->
            <nav class="cf">
                <ul id="nav" class="sf-menu">
                    <li 
                     @if ($_SERVER['REQUEST_URI'] == '/home')
                        class="current-menu-item"
                    @endif >
                    <a href="/home"><span>HOME</span></a></li>
                    <li><a href="page.html"><span>MATERIALS</span></a>
                        <ul>
                            <li><a href="/texts">Texts</a></li>
                            <li><a href="/videos">Video</a></li>
                            <li><a href="/musics">Musics</a></li>
                            <li><a href="/pictures">Pictures</a></li>
                        </ul>
                    </li>
                    <li
                    @if ($_SERVER['REQUEST_URI'] == '/blog')
                        class="current-menu-item"
                    @endif >
                    <a href="/blog"><span>BLOG</span></a></li>
                    <li
                     @if ($_SERVER['REQUEST_URI'] == '/work')
                        class="current-menu-item"
                    @endif >
                    <a href="/work"><span>WORK</span></a></li>
                    <li 
                    @if ($_SERVER['REQUEST_URI'] == '/contact')
                        class="current-menu-item"
                    @endif >
                    <a href="/contact"><span>CONTACT</span></a></li>
                </ul>
                <div id="combo-holder"></div>
            </nav>
            <!-- ends nav -->
            
        </header>
        
        @yield('content')
        
        <footer>
        
            <!-- text message -->
            <div id="twitter-holder">
                <div class="ribbon-left"></div>
                <div class="ribbon">
                    <div id="tweets-bar" class="tweet">
                    
                    <ul class="tweet_list">
                        <li>
                        <div class="tweet_time">Today</div>
                        Enter an small text notification visible on all pages. <a href="http://twitter.com/ansimuz" >@ansimuz</a> </li>
                    </ul>
                    
                    </div>
                </div>
                <div class="ribbon-right"></div>
            </div>
            <!-- ENDS text message -->
            
            
            <!-- widgets -->
            <ul  class="widget-cols cf">
                <li class="first-col">
                    
                    <div class="widget-block">
                        <h4>RECENT POSTS</h4>
                        <div class="recent-post cf">
                            <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
                            <div class="post-head">
                                <a href="#">Pellentesque habitant morbi senectus </a><span> March 12, 2011</span>
                            </div>
                        </div>
                        <div class="recent-post cf">
                            <a href="#" class="thumb"><img src="img/dummies/54x54b.gif" alt="Post" /></a>
                            <div class="post-head">
                                <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                            </div>
                        </div>
                        <div class="recent-post cf">
                            <a href="#" class="thumb"><img src="img/dummies/54x54c.gif" alt="Post" /></a>
                            <div class="post-head">
                                <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                            </div>
                        </div>
                    </div>
                </li>
                
                <li class="second-col">
                    
                    <div class="widget-block">
                        <h4>ABOUT</h4>
                        <p>Vintage Template it's completely free this means you don't have to pay anything <a href="http://luiszuno.com/blog/license" >read license</a>.</p> 
                        
                        <p>Placeholder images by <a href="http://twistedfork.me/" >Dan Matutina</a></p>
                        <p>Visit <a href="http://templatecreme.com/" >Template Creme</a> and find the most beautiful free templates up to date.</p>
                    </div>
                    
                </li>
                
                <li class="third-col">
                    
                    <div class="widget-block">
                        <h4>DUMMY TEXT</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. </p>
                    </div>
                    
                </li>
                
                <li class="fourth-col">
                    
                    <div class="widget-block">
                        <h4>CATEGORIES</h4>
                        <ul>
                            <li class="cat-item"><a href="#" >Design</a></li>
                            <li class="cat-item"><a href="#" >Photo</a></li>
                            <li class="cat-item"><a href="#" >Art</a></li>
                            <li class="cat-item"><a href="#" >Game</a></li>
                            <li class="cat-item"><a href="#" >Film</a></li>
                            <li class="cat-item"><a href="#" >TV</a></li>
                        </ul>
                    </div>
                    
                </li>   
            </ul>
            <!-- ENDS widgets -->
            
            <!-- bottom -->
            <div id="bottom">
                <div id="widget-trigger-holder"><a id="widget-trigger" href="#" title="View More" class="poshytip"></a></div>
                <div id="social-bar-holder">
                <ul id="social-bar" class="cf">
                    
                    <li class="dribbble"><a href="http://www.dribbble.com/ansimuz"  title="Dribbble" ></a></li>
                    <li class="facebook"><a href="http://www.facebook.com/pages/Ansimuz/224538697564461"  title="Facebook" ></a></li>
                    <li class="forrst"><a href="http://forrst.me/ansimuz"  title="forrst" ></a></li>
                    <li class="googleplus"><a href="https://plus.google.com/109030791898417339180/posts"  title="googleplus" ></a></li>
                    <li class="twitter"><a href="https://twitter.com/ansimuz"  title="twitter" ></a></li>
                </ul>
            </div>
                <div id="content">HalfTone Theme by <a href="http://www.luiszuno.com" >luiszuno.com</a> </div>
            </div>
            <!-- ENDS bottom -->
            
        </footer>
        
        
    </div>
    <!-- ENDS WRAPPER -->

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- JavaScript at the bottom for fast page loading -->
    
    
    <!-- scripts concatenated and minified via build script -->
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/custom.js"></script>
    
    <!-- superfish -->
    <script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
    <script  src="js/superfish-1.4.8/js/superfish.js"></script>
    <script  src="js/superfish-1.4.8/js/supersubs.js"></script>
    <!-- ENDS superfish -->
    
    <script src="js/jquery.nivo.slider.js" ></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/tabs.js"></script>
    <script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
    <script src="js/myMaine.js"></script>
    <!-- end scripts -->
</body>
</html>
