<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
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
        $testimonials = Testimonial::get();
                     
        return view('homepages.testimonials',compact('testimonials'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonials.create');
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
        auth()->user()->testimonials()->create($attributes);

        return redirect('/testimonials');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonial = Testimonial::findorFail($id);
             
        return view('homepages.testimonial_detail',compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        $this->authorize('manage', $testimonial);

        $testimonial = Testimonial::findorFail($testimonial->id);
                     
        return view('testimonials.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
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
    public function destroy(Testimonial $testimonial)
    {
                             
        $this->authorize('manage', $testimonial);

        $testimonial->delete();
        return redirect('/testimonials');    }
}
