@extends('layouts.app')

@section('content')
<div class="container">
    <!-- MAIN -->
        <div role="main" id="main" class="cf">
            
            <!-- categories -->
            <ul class="nav-categories cf">
                <li class="current"><a href="#" >all</a></li>
                <li><a href="#" >print</a></li>
                <li><a href="#" >photography</a></li>
                <li><a href="#" >web design</a></li>
            </ul>
            <!-- ENDS categories -->
            
            <!-- featured -->
            <ul class="work-list cf">
                <li>
                    <a href="project.html" class="thumb" >
                        <img src="img/dummies/t1.jpg" alt="Thumbnail" />
                        <div class="img-overlay"><i class="icon-plus-sign"></i></div>
                    </a>
                    <a href="project.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
                    <div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
                </li>
                
                <li>
                    <a href="project.html" class="thumb" >
                        <img src="img/dummies/t2.jpg" alt="Thumbnail" />
                        <div class="img-overlay"><i class="icon-plus-sign"></i></div>
                    </a>
                    <a href="project.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
                    <div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
                </li>
                
                <li>
                    <a href="project.html" class="thumb" >
                        <img src="img/dummies/t3.jpg" alt="Thumbnail" />
                        <div class="img-overlay"><i class="icon-plus-sign"></i></div>
                    </a>
                    <a href="project.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
                    <div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
                </li>
                
                <li>
                    <a href="project.html" class="thumb" >
                        <img src="img/dummies/t1.jpg" alt="Thumbnail" />
                        <div class="img-overlay"><i class="icon-plus-sign"></i></div>
                    </a>
                    <a href="project.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
                    <div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
                </li>
                
                <li>
                    <a href="project.html" class="thumb" >
                        <img src="img/dummies/t2.jpg" alt="Thumbnail" />
                        <div class="img-overlay"><i class="icon-plus-sign"></i></div>
                    </a>
                    <a href="project.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
                    <div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
                </li>
                
                <li>
                    <a href="project.html" class="thumb" >
                        <img src="img/dummies/t3.jpg" alt="Thumbnail" />
                        <div class="img-overlay"><i class="icon-plus-sign"></i></div>
                    </a>
                    <a href="project.html"  class="excerpt">Pellentesque habitant morbi tristique senectus</a>
                    <div class="categories"><a href="#" >webdesign, </a><a href="#" >print, </a><a href="#" >photo, </a></div>
                </li>
                
                
            </ul>
            <!-- ENDS featured -->
                        
        </div>
        <!-- ENDS MAIN -->
</div>
@endsection
