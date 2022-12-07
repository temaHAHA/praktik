<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function comics(){
        $comic=\App\Models\product::orderBy('id', 'desc')->limit(5)->get();
    return view('praktika.glav', ['comic'=>$comic ]);
    }
}
