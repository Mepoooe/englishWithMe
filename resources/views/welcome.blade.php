@extends('layouts.app')

@section('content')
<div class="container">
   <div role="main" id="main" class="cf">
        
        
        
            <!-- SLIDER -->
            <div class="slider-wrapper theme-halftone">
                <div id="slider" class="nivoSlider">
                    <img src="img/dummies/slides/01.jpg" alt=""  />
                    <img src="img/dummies/slides/02.jpg" alt="" />
                    <img src="img/dummies/slides/03.jpg" alt="" />
                </div>
                <div class="slider-left"></div>
                <div class="slider-right"></div>
            </div>
            <!-- ENDS SLIDER -->
            
            
            <!-- headline -->
            <div class="headline">HALFTONE IS STYLISH AND CUTE</div>
            <!-- ENDS headline -->
            
            
            <!-- featured -->
            <ul class="feature cf">
                <li>
                    <a href="single.html" class="thumb" >
                        <img src="img/dummies/t1.jpg" alt="Thumbnail" />
                        <div class="img-overlay"><i class="icon-plus-sign"></i></div>
                        <div class="date"><span class="m">JAN</span><span class="d">09</span></div>
                    </a>
                    <a href="single.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
                    <div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
                </li>
                
                <li>
                    <a href="single.html" class="thumb" >
                        <img src="img/dummies/t2.jpg" alt="Thumbnail" />
                        <div class="img-overlay"><i class="icon-plus-sign"></i></div>
                        <div class="date"><span class="m">JAN</span><span class="d">09</span></div>
                    </a>
                    <a href="single.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
                    <div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
                </li>
                
                <li>
                    <a href="single.html" class="thumb" >
                        <img src="img/dummies/t3.jpg" alt="Thumbnail" />
                        <div class="img-overlay"><i class="icon-plus-sign"></i></div>
                        <div class="date"><span class="m">JAN</span><span class="d">09</span></div>
                    </a>
                    <a href="single.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
                    <div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
                </li>
            </ul>
            <!-- ENDS featured -->
            
    </div>
</div>
@endsection
