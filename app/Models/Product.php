<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    static $blog, $image, $directory, $imageName;

    static function imageUrl($imagedata){
        self :: $image = $imagedata ->file('img');
        self :: $imageName = self :: $image ->getClientOriginalName();
        self :: $directory = 'blog-img/';
        self ::$image->move(self ::$directory, self ::$imageName);
        return self :: $directory. self ::$imageName;
    }


    static function createBlog($data)
    {
        self :: $blog = new Product();
        self :: $blog->Name = $data-> name;
        self :: $blog->Category_name	 = $data-> ctName;
        self :: $blog->Brand_name	 = $data-> bdName;
        self :: $blog->Description=$data-> description;
        self :: $blog->Image=self :: imageUrl($data);
        self :: $blog->Status=$data-> status;
        self :: $blog->save();

    }

    static function deleteProduct($id)
    {
        $product = Product :: find($id);
        if(file_exists($product->Image))
        {
            unlink($product->Image);
        }
       $product ->delete();
    }

}
