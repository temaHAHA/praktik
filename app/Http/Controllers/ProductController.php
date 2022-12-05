<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function comics(){
        $comic=\App\Models\product::all();
    return view('praktika.glav', ['comic'=>$comic ]);
    }
}
