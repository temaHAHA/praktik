<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function comics(){
        $comic=\App\Models\product::orderBy('id', 'desc')->limit(5)->get();
    return view('praktika.glav', ['comic'=>$comic ]);
    }

    public function catalog(){
        $comic=\App\Models\product::orderBy('id', 'desc')->get();
        $categor=\App\Models\product::get();
        $categorName=\App\Models\product::get();
    return view('praktika.catalog', ['comic'=>$categor, 'categorName'=>$categorName]);
    
    }

    public function tovar($id){
      
        $comic=\App\Models\product::find($id);
    return view('praktika.product', ['comic'=>$comic ]);
    }

    public function find(){

<<<<<<< HEAD
        return view('praktika.naiti');
    }

    public function sort($category){
        $categor=\App\Models\product::where('category', $category)->get();
        $categorName=\App\Models\product::get();
    return view('praktika.catalog', ['comic'=>$categor, 'categorName'=>$categorName, 'category'=>$category   ]);
    }

    public function Price($name, $nap){
        $comic=\App\Models\product::orderby($name,$nap)->get();
        $categorName=\App\Models\product::get();
    return view('praktika.catalog', ['comic'=>$comic, 'categorName'=>$categorName, 'category'=>$nap   ]);
=======
    return view('praktika.naiti');
>>>>>>> d3699683dea439d7d4d29fbefcc53519bb0c5316
    }
}
