<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $table = 'admin_blog';

    public function giveArticle ($articleArray)
	{
		$blog = new Blog;
		foreach ($articleArray as $keyArticle => $valueArticle) {
			
			$blog->$keyArticle = $valueArticle;
		}
		$blog->save();

		return  Blog::all()->toArray();
	}
}
