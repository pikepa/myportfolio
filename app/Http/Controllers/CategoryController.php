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
        $category=Category::findOrFail($id);

                //    dd($category);
                     
        $products=$category->products;

        return view('dashboard.home',compact('products'));

    }
}
