<?php
namespace App;



use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Database\Eloquent\Model;

class forImages extends Model
{   
    // 
    static function addImage ($file, $flag) 
    {
        if ($flag == 'blog') {
            $fileName = $file->getClientOriginalName();
            $fileName = uniqid().$fileName;
            $filePath = '/tmp/imageForBlog/' .$fileName;
            if(is_file($filePath)){
                $filePath->destroy();
            }

            Image::make($file)
                ->resize(300, 300, function($constraint) {
                    $constraint->aspectRatio();
                })
                ->save('./tmp/imageForBlog/cut-' .$fileName);

            $file->move('tmp', $fileName);
            return $fileName;
        }

        foreach ($file as $key => $value) {
                if( strncasecmp($key, 'img', 3) == 0) {
                    //$typeFile = $value
                    $fileName = $key.".jpg";
                    $filePath = 'tmp/'.$fileName;
                    if(is_null($filePath)){
                        if(is_file($filePath)){
                            $filePath->destroy();
                        }
                    }

                    Image::make($value)
                        ->resize(200, 200, function($constraint) {
                            $constraint->aspectRatio(); 
                        })
                        ->save('tmp/cut-' .$fileName);

                     Image::make($value)
                        ->resize(1000, 400, function($constraint) {
                            $constraint->aspectRatio(); 
                        })
                        ->save('tmp/slider-' .$fileName);

                    $value->move('tmp', $fileName);

                    
                    $file[] = $fileName;
                }
        }
        return $file;
    }

    //Удаляет изображение 
    static function delImage ($Model, $id)
    {
        $el = $Model::where('id', $id)->find($id);
        $imgName = $el->img;

        $filePath = "./tmp/" .$imgName;

        if(is_file($filePath)){
            File::delete("./tmp/cut-" .$imgName);
            File::delete("./tmp/" .$imgName);
        }

        //$Model::destroy($id);
    }
}
