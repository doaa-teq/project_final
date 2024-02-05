<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trait\Common;
use App\Models\Car;
use App\Models\Category;



class carcontroller extends Controller
{
    private $colunm = ['title','content','Luggage','Doors','Passengers','price','Active','image','category_id'];
    use Common;
    /**
     * Display a listing of the resource.
     */
       
                public function index()
                {
                    $car=Car::get();
                    $category=Category::select('id','category_name')->get(); 
                    return view('cars',compact('car','category'));//compact for downloading tha data 

                }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::select('id','category_name')->get(); 
        return view ('addcar',compact('category'));
    }
   
    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)

            { $car=new Car;//we use the same names of the field inside the table
                $car->title=$request->title;
                $car->content=$request->content;
                $car->Luggage=$request->Luggage;
                $car->Doors=$request->Doors;
                $car->Passengers=$request->Passengers;
                $car->price=$request->price;
                $filename = $this->uploadFile($request->image, 'assetss\images');
                $car['image'] = $filename;
                $car->category_id=$request->category_id;
               if(isset($request->Active)){

                $car->Active = 0;

              }else{

                $car->Active = 1;

             }
             
             $car->save();
             return "cars data added sussessfully";
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
        $car = Car::findOrFail($id);
        $categories=Category::select('id','category_name')->get();//to get certain dat from the category table
        return view('editcars', compact('car', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Car::where('id',$id)->update($request->only($this->colunm));//here i used the name in the name o the colunmsarray
        return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return redirect ('cars');
    }
    public function Trashed(){
        $cars=Car::onlyTrashed()->get();
        return view('Trashed',compact('cars'));
    }
    public function restore(string $id){
        Car::where('id',$id)->restore();
        return redirect ('cars');
    }
    public function delete(string $id){
        Car::where('id',$id)->forceDelete();
        return redirect ('Trashed');
    }
}
