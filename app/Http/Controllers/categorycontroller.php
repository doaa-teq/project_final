<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class categorycontroller extends Controller
{
    private $colunm = ['category_name'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catego=Category::get();
        return view('categories',compact('catego'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        
        $category=Category::get();
        return view('addcategory',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
       $messages = $this->messages();
         
            $data=$request->validate(['category_name'=>'required|string',
            
            ],$messages);
        Category::create($data); 
    }
    public function messages(){
        return [
        'category_name.required' => 'category_name name is required',
        
       
        ];
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
        $categories=Category::findOrFail($id);//to get certain dat from the category table
        return view('editcategory', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Category::where('id',$id)->update($request->only($this->colunm));//here i used the name in the name o the colunmsarray
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
