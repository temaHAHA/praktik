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
    return view('praktika.catalog', ['comic'=>$comic ]);
    }

    public function tovar($id){
      
        $comic=\App\Models\product::find($id);
    return view('praktika.product', ['comic'=>$comic ]);
    }
}
