@extends('layouts.app')
@section('content')
@include('layouts.adminMenu')
<div class="container">
	<div role="main" id="main" class="cf">

    <div class="row">
    	<h1 class="col-md-8 col-md-offset-4" >Страница Home</h1>
	</div>

	<div class="row">
		<div class='col-md-8 col-md-offset-1'>
		    <h2>Добавить рекламу на банер</h2>
		</div>
	</div>

	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	 
	<div class="row">
		<div class="col-md-8 col-md-offset-3">
		    <form action="/homeAdmin" method="POST" enctype="multipart/form-data">
			    <div class="row">
			    	<div class="col-md-8 homeAdminSlides">

			    	<label for="fileBaner1"> Слайд №1<br>
			    		<div class="form-group">
						    <label for="exampleInputName1">Имя банера: </label>
						    <input type="text" name="banerName1" class="form-control" id="exampleInputName1" placeholder="Name">
						</div>
			    		<input type="file" name="img1" id="fileBaner1">
					</label>
					</div>
					<div class="col-md-4">
						<img src="tmp/cut-img1.jpg" alt="">
					</div>
				</div>

				<div class="row">
					<div class="col-md-8 homeAdminSlides">
				    	<label for="fileBaner2"> Слайд №2
				    	<div class="form-group">
						    <label for="exampleInputName2">Имя банера: </label>
						    <input type="text" name="banerName2" class="form-control" id="exampleInputName2" placeholder="Name">
						</div>
				    		<input type="file" name="img2" id="fileBaner2">
						</label>
					</div>
					<div class="col-md-4">
						<img src="tmp/cut-img2.jpg" alt="picture">
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 homeAdminSlides">
				    	<label for="fileBaner3"> Слайд №3
				    	<div class="form-group">
						    <label for="exampleInputName3">Имя банера: </label>
						    <input type="text" name="banerName3" class="form-control" id="exampleInputName3" placeholder="Name">
						</div>
				    		<input type="file" name="img3" id="fileBaner3">
						</label>
					</div>
					<div class="col-md-4">
						<img src="tmp/cut-img3.jpg" alt="picture">
					</div>
				</div>
				{{csrf_field()}}
				<div class="row">
					<button class="btn btn-primary col-md-4 col-md-offset-4"> Отправить</button>
				</div>
		    </form>
		</div>
	</div>

	   
	
	
</div>
@endsection