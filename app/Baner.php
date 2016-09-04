<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Baner extends Model
{
	protected $table = 'baner';

	static function giveBaner ()
	{
		return  Baner::all()->toArray();
	}

   	static function bunerAdd ($banerArr) 
   	{	
   		$id = 1; 
   		$baner = Baner::find($id);
   		if ($baner == null) {
   				
   			$baner = new Baner();
   			$baner->name1 = $banerArr['name1'];
			$baner->img1 = $banerArr['img1'];
			$baner->name2 =$banerArr['name2'];
			$baner->img2 = $banerArr['img2'];
			$baner->name3 = $banerArr['name3'];
			$baner->img3 = $banerArr['img3'];

   			return  Baner::all()->toArray();
   		}

   		foreach ($banerArr as $key => $value) {

	   		if($key == 'name1') {
	   			$id = 1;
	   			$baner = Baner::find($id);
	   			$baner->name1 = $banerArr['name1'];
	   			$baner->img1 = $banerArr['img1'];
	   			$baner->save();
			}
			if($key == 'name2') {
	   			$id = 2;
	   			$baner = Baner::find($id);
	   			$baner->name2 =$banerArr['name2'];
	        	$baner->img2 = $banerArr['img2'];
	   			$baner->save();
			}
			if($key == 'name3') {
	   			$id = 3;
	   			$baner = Baner::find($id);
	   			$baner->name3 = $banerArr['name3'];
	        	$baner->img3 = $banerArr['img3'];
	   			$baner->save();
			}
    	}
    	return  Baner::all()->toArray();
    }
}
