<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Trait\Common;



class testimonialcontroller extends Controller
{
    private $colunm = ['title','position','content','published','image'];
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonial=Testimonial::get();
        return view('testimonials',compact('testimonial'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $testimo=Testimonial::get();
        return view('addtestimonial',compact('testimo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testimo=new Testimonial;//we use the same names of the field inside the table
               $testimo->title=$request->title;
               $testimo->content=$request->content;
               $testimo->position=$request->position;
               $filename = $this->uploadFile($request->image, 'assetss\images');
                $testimo['image'] = $filename;
              if(isset($request->published)){

                $testimo->published = 0;

              }else{

                $testimo->published = 1;

             }
             
             $testimo->save();
             return "cars data added sussessfully";
            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial=Testimonial::findOrFail($id);//to get certain dat from the category table
        return view('edittestemonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Testimonial::where('id',$id)->update($request->only($this->colunm));//here i used the name in the name o the colunmsarray
        return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
