<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userr;

class userrcontroller extends Controller
{
    private $colunm = ['full_name','user_name','email','Active','password'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Userr::get();
        return view('userrs',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $use=Userr::get();
        return view('adduserr',compact('use'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $use=new Userr;//we use the same names of the field inside the table
            $use->full_name=$request->full_name;
            $use->user_name=$request->user_name;
            $use->email=$request->email;
            $use->password=$request->password;

            if(isset($request->Active)){

                $use->Active = 0;

              }else{

                $use->Active = 1;

             }
             
             $use->save();
             return "cars data added sussessfully";
    
}
public function messages(){
    return [
    'full_name.required' => 'full_name name is required',
    'user_name.required' => 'user_name name is required',
    'email.required' => 'email is required',
    'Active.required' => 'Active is required',
    'password.required' => 'password is required',

    
   
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
        $userr=Userr::findOrFail($id);//to get certain dat from the category table
        return view('edituser', compact('userr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Userr::where('id',$id)->update($request->only($this->colunm));//here i used the name in the name o the colunmsarray
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
