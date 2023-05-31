<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $allBlogs = new Product();
        return view('user.home',['blogs'=>$allBlogs->all()]);
    }
    public function addProduct()
    {
        return view('user.addProduct');
    }
    public function viewProduct()
    {
        
        $allBlogs = new Product();
    
        return view('user.viewProduct',['blogs'=>$allBlogs->all()]);
        // return view('viewProduct');
    }
    public function recinfo(Request $request)
    
    {
        Product::createBlog($request);
        return redirect('/add')->with('msg', "Nottify: Blog Added");
        // return $request->all();
        // return view('viewProduct');
    }

    public function details($id)
    {
        $blog = Product :: find($id);
        // return $blog;
        return view('user.details', ['blog'=>$blog]);
    }
    public function delete($id)
    {
        $blog = Product :: deleteProduct($id);
        return redirect('/view');
        // return $blog;
        // return view('delete');
    }
}

