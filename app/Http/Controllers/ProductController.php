<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        /**
     * Instantiate a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'index',
            'show',
        ]]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
                                                       
        return view('homepages.welcome',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'client_name' => 'required', 
            'country' => 'required', 
            'story'=>'required',
            'img_name'=>'required',
            'approved'=>'required'
        ]);
        auth()->user()->products()->create($attributes);

        return redirect('/products');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonial = Product::findorFail($id);
             
        return view('homepages.testimonial_detail',compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $testimonial)
    {
        $this->authorize('manage', $testimonial);

        $testimonial = Product::findorFail($testimonial->id);
                     
        return view('testimonials.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $testimonial)
    {
            $attributes = request()->validate([
            'client_name' => 'required', 
            'country'=>'required',
            'story'=>'required'
        ]);

        $this->authorize('manage', $testimonial);
        $testimonial->update($attributes);
        return redirect($testimonial->path());         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $testimonial)
    {
                             
        $this->authorize('manage', $testimonial);

        $testimonial->delete();
        return redirect('/testimonials');    }
}
