<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Baner;
use App\Blog;
use App\Http\Requests;
use App\forImages;
use Intervention\Image\Facades\Image as Image;
class AdminController extends Controller
{
    function index ()
    {
        return view('admin/admin');
    }
	
	function homeAdmin ()
    {	
    	$data['banerValues'] = Baner::giveBaner();
        return view('admin/adminPages/homeAdmin', $data);
    }

    function baner (Request $request)
    {
    	$this->validate($request, [
        'banerName1' => 'alpha_dash|max:255',
        'banerName2' => 'alpha_dash|max:255',
        'banerName3' => 'alpha_dash|max:255',
        'img1' => 'image',
        'img2' => 'image',
        'img3' => 'image'
        ]);

        try {
        	$banerArr = array();
        	$banerArr['name1'] = $request->input('banerName1');
            $banerArr['name2'] = $request->input('banerName2');
            $banerArr['name3'] = $request->input('banerName3');

        	
            $banerArr['img1'] = $request->file('img1');
            $banerArr['img2'] = $request->file('img2');
            $banerArr['img3'] = $request->file('img3');

            $flag = 'baner';
         	$banerArr = forImages::addImage($banerArr, $flag);

            $data['banerValues'] = Baner::bunerAdd($banerArr);
            return view('admin/adminPages/homeAdmin');
        } catch (Exception $e) {
        	Log::error('Ошибка записи');
            return redirect('/adminka');
        }
    }

    function blogAdmin ()
    {   
        //$data['banerValues'] = Baner::giveBaner();
        return view('admin/adminPages/blogAdmin');
    }

    // принимает данные из формы, обрабатывает и направляет в модель
    function addArticle (Request $request)
    {
        $this->validate($request, [
        'name_article' => 'alpha_dash|max:255|required',
        'tag_article' => 'alpha_dash|max:255',
        'short_content' => 'alpha_dash|max:255',
        'content' => 'alpha_dash|max:255',
        'article_img' => 'image'
        ]);        

        try {
            $articleArray = array();
            foreach ($request->input() as $keyNameArticle => $valuekeyName) {
                $articleArray[$keyNameArticle] = $request->input($keyNameArticle);
            }
            foreach ($articleArray as $key => $value) {
                if ($key == '_token') {
                    unset($articleArray[$key]);
                }
            }
            $imgArticle = $request->file('article_img');

            $imgForBlog = forImages::addImage($imgArticle, 'blog');
            // В массиве $articleArray, наши обработынные данные готовые для модели
            $articleArray['article_img'] = $imgForBlog;

            $blog = new Blog;
            $getArticle =   $blog->giveArticle($articleArray);
            
            $data['succes'] = $articleArray;
            return view('admin/adminPages/blogAdmin', $data);
            
            //$articleArray['img1'] = $request->file('img1');
            //$articleArray['img2'] = $request->file('img2');
            //$articleArray['img3'] = $request->file('img3');

            //$articleArray = forImages::addImage($articleArray);

            //$data['banerValues'] = Baner::bunerAdd($banerArr);
        return redirect('/blogAdmin');
        } catch (Exception $e) {
            Log::error('Ошибка записи');
            return redirect('/adminka');
        }
    }
}
