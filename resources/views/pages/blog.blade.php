@extends('layouts.app')

@section('content')
<div class="container">
    <!-- MAIN -->
        <div role="main" id="main" class="cf">
            
            <!-- posts list -->
            <div id="posts-list" class="cf"> 
            
                <article class="cf">
                    <div class="feature-image">
                        <a href="single.html" ><img src="img/dummies/672x400a.jpg" alt="Thumbnail" /></a>
                    </div>
                    <div class="entry-left-data">
                        <div class="entry-date"><span class="m">JAN</span><span class="d">23</span></div>
                        <a href="readMore#comments" class="comments">161</a>
                    </div>
                    
                    <div class="entry-right-data">
                        <a href="single.html" class="post-heading" >LOREM IPSUM DOLOR</a>
                        <div class="meta">
                            <span class="user"><a href="#">By LuisZuno, </a></span>
                            <span class="tags"><a href="#">red</a>, <a href="#">cyan</a>, <a href="#">white</a>, <a href="#">blue</a></span>
                            </div>
                        <div class="excerpt">
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. 
                        </div>  
                        <a href="/readMore" class="link-button">Read More</a> 
                    </div>
                </article>
                
                <article class="cf">
                    <div class="feature-image">
                        <a href="single.html" ><img src="img/dummies/672x400b.jpg" alt="Thumbnail" /></a>
                    </div>
                    <div class="entry-left-data">
                        <div class="entry-date"><span class="m">JAN</span><span class="d">23</span></div>
                        <a href="single.html#comments" class="comments">161</a>
                    </div>
                    
                    <div class="entry-right-data">
                        <a href="single.html" class="post-heading" >LOREM IPSUM DOLOR</a>
                        <div class="meta">
                            <span class="user"><a href="#">By LuisZuno, </a></span>
                            <span class="tags"><a href="#">red</a>, <a href="#">cyan</a>, <a href="#">white</a>, <a href="#">blue</a></span>
                            </div>
                        <div class="excerpt">
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. 
                        </div>  
                        <a href="single.html" class="link-button">Read More</a> 
                    </div>
                </article>
                
                <article class="cf">
                    <div class="feature-image">
                        <a href="single.html" ><img src="img/dummies/672x400c.jpg" alt="Thumbnail" /></a>
                    </div>
                    <div class="entry-left-data">
                        <div class="entry-date"><span class="m">JAN</span><span class="d">23</span></div>
                        <a href="single.html#comments" class="comments">161</a>
                    </div>
                    
                    <div class="entry-right-data">
                        <a href="single.html" class="post-heading" >LOREM IPSUM DOLOR</a>
                        <div class="meta">
                            <span class="user"><a href="#">By LuisZuno, </a></span>
                            <span class="tags"><a href="#">red</a>, <a href="#">cyan</a>, <a href="#">white</a>, <a href="#">blue</a></span>
                            </div>
                        <div class="excerpt">
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. 
                        </div>  
                        <a href="/readMore" class="link-button">Read More</a> 
                    </div>
                </article>
                
                
                <!-- page-navigation -->
                <div class="page-navigation cf">
                    <div class="nav-next"><a href="#">Older Entries</a></div>
                    <div class="nav-previous"><a href="#">Newer Entries</a></div>
                </div>
                <!--ENDS page-navigation -->
                    
                        
            </div>
            <!-- ENDS posts list -->            
            
            <!-- sidebar -->
            <aside id="sidebar">
                
                <ul>
                    
                    <li class="block">
                        <div class="sidebar-top"></div>
                        <div class="sidebar-content">
                            <h4 class="heading">Sponsors</h4>
                            
                            <div class="ads cf">
                                <a href="http://themeforest.net/user/Ansimuz/portfolio?ref=ansimuz"><img src="img/dummies/banner-tf.gif" alt="Thumbnail"></a>
                                <a href="http://www.mojo-themes.com/?r=ansimuz" class="last" ><img src="img/dummies/banner-mt.jpeg" alt="Thumbnail"></a>
                                <a href="http://templatecreme.com/list/"><img src="img/dummies/banner-tp.jpeg" alt="Thumbnail"></a>
                                <a href="http://themeforest.net/user/Ansimuz/portfolio?ref=ansimuz" class="last"><img src="img/dummies/banner-tf.gif" alt="Thumbnail"></a>
                            </div>
                        </div>
                        <div class="sidebar-bottom"></div>
                    </li>
                    
                    <li class="block">
                        <div class="sidebar-top"></div>
                        <div class="sidebar-content">
                            <h4 class="heading">Text Widget</h4>
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. 
                        </div>
                        <div class="sidebar-bottom"></div>
                    </li>
                    
                    <li class="block">
                        <div class="sidebar-top"></div>
                        <div class="sidebar-content">
                            <h4 class="heading">Categories</h4>
                            <ul>
                                <li class="cat-item"><a href="#" title="title">Film and video<span class="post-counter"> (2)</span></a></li>
                                <li class="cat-item"><a href="#" title="title">Print<span class="post-counter"> (2)</span></a></li>
                                <li class="cat-item"><a href="#" title="title">Photo and lomo<span class="post-counter"> (2)</span></a></li>
                                <li class="cat-item"><a href="#" title="title">Habitant morbi<span class="post-counter"> (2)</span></a></li>
                                <li class="cat-item"><a href="#" title="title">Film and video<span class="post-counter"> (2)</span></a></li>
                                <li class="cat-item"><a href="#" title="title">Print<span class="post-counter"> (2)</span></a></li>
                                <li class="cat-item"><a href="#" title="title">Photo and lomo<span class="post-counter"> (2)</span></a></li>
                                <li class="cat-item"><a href="#" title="title">Habitant morbi<span class="post-counter"> (2)</span></a></li>
                            </ul>
                        </div>
                        <div class="sidebar-bottom"></div>
                    </li>
                </ul>
                
            </aside>
            <!-- ENDS sidebar -->           
            
        </div>
        <!-- ENDS MAIN -->
</div>
@endsection
