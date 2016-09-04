@extends('layouts.app')

@section('content')
<div class="container">
    <!-- MAIN -->
        <div role="main" id="main" class="cf">
            
            <!-- page-content -->
            <div class="page-content">
                
                <!-- entry-content -->  
                <div class="entry-content cf">
                    
                    <!-- GOOGLE MAPS -->
                    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true" ></script>
                    <script type="text/javascript">
                        function initialize() {
                            var latlng = new google.maps.LatLng(-34.397, 150.644);
                            var myOptions = {
                              zoom: 8,
                              center: latlng,
                              mapTypeId: google.maps.MapTypeId.ROADMAP
                        };
                        var map = new google.maps.Map(document.getElementById("map_canvas"),
                            myOptions);
                        }
                    </script>
                    @if(isset($succes))
                        {{$succes}}
                    @endif
                    <h2 class="heading">It's me!</h2>
                    <div class="row">
                      <div class="col-md-5 col-md-offset-3">
                        <img class="img-thumbnail" src="img/myPhoto.jpeg" alt="myPhoto">
                      </div>
                    </div>
                    <p> Здесь будет информация про меня!</p>
                    <!-- Start google map -->
                    <script>initialize();</script>
                    <!-- ENDS GOOGLE MAPS -->
                    
                    
                     <div class="block-divider"></div>
                     
                    <h2 class="heading">Contact Form</h2>
                <!-- form -->
                <form role="form" action="/sendLetter" method="POST" >
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <fieldset>
                                                            
                            <div class="form-group">
                                <label for="name" >Name</label>
                                <input  name="name"  id="name" type="text" class="form-control" title="Enter your full name" />
                            </div>
                            
                            <div class="form-group">
                                <label for="email" >Email</label>
                                <input name="email"  id="email" type="text" class="form-control" title="Enter your email address" />
                            </div>
                            
                            <div class="form-group">
                                <label for="web">Your question</label>
                                <input name="question"  id="web" type="text" class="form-control" title="Enter your website" />
                            </div>
                            
                            <div class="form-group">
                                <label for="comments">Message</label>
                                <textarea  name="message"  id="comments" rows="5" cols="20" class="form-control" title="Enter your comments"></textarea>
                            </div>
                            
                            
                            {{csrf_field()}}
                            <p><button class="btn btn-primary">Send</button></p>
                        </fieldset> 
                </form>
                <p id="sent-form-msg" class="contacts-nothing">Form data sent. Thanks for your comments.</p>
                <!-- ENDS form -->
                
                
                                        
                </div>
                <!-- ENDS entry-content -->

            </div><!-- ENDS page-content -->
                        
        </div>
        <!-- ENDS MAIN -->
</div>
@endsection
