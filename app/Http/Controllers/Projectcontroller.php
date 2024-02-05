<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Testimonial;
use App\Models\Blog;




class Projectcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
       return view ('about');
    }
    public function blog()
    {
        
       return view ('blog');
    }
    public function contact()
    {
       return view ('contact');
    }
    public function listing()
    {
        $car=Car::get();
        return view ('listing',compact('car'));
    }
    public function testemonial()
    {
       $testimonial=Testimonial::get();
       return view ('testemonial',compact('testimonial'));
    }
    public function indexx()
    {
        $car=Car::get();
        $testimonial=Testimonial::get();
       return view ('index',compact('car','testimonial'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
