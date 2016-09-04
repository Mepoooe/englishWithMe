@extends('layouts.app')
@section('content')
@include('layouts.adminMenu')
<div class="container">
	<div role="main" id="main" class="cf">

    <div class="row">
    	<h1 class="col-md-8 col-md-offset-4" >Страница Blog</h1>
	</div>

	<div class="row">
		<div class='col-md-8 col-md-offset-1'>
		    <h2>Добавить новый пост в Блог</h2>
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
		    <form action="/addArticle" method="POST" enctype="multipart/form-data">
			    <div class="row">
			    	<div class="col-md-8 homeAdminSlides">
			    		<div class="form-group">
						    <label for="exampleInputName1">Заголовок поста </label>
						    <input type="text" name="name_article" class="form-control" id="exampleInputName1" placeholder="Name">
						</div>
						<label>Картинка поста 
			    			<input type="file" name="article_img">
						</label>
						<label>Ключевые слова для поста 
			    			<input type="text" name="tag_article">
						</label>
						<label >Краткое содержание поста 
			    			<input type="textarea" name="short_content">
						</label>	
						<label >Содержание поста 
			    			<input type="textarea" name="content">
						</label>					

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