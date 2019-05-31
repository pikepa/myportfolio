<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bycategory($id)
    {
        $cat=Category::findOrFail($id);
                     
        $products=$cat->products;

        return view('dashboard.home',compact('products','cat'));

    }
}
