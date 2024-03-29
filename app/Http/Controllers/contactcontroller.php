<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContaxtUs;
use Mail;


class contactcontroller extends Controller
{
    private $colunm = ['first_name','last_name','email','massege'];

    /**
     * 
     * Display a listing of the resource.
     */
    public function index(){
    
        $contacts=Contact::get();
        return view('m',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact=Contact::get();
        return view('contact',compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $contact=new Contact;//we use the same names of the field inside the table
        //     $contact->first_name=$request->full_name;
        //     $contact->last_name=$request->last_name;
        //     $contact->email=$request->email;
        //     $contact->massege=$request->massege;

        //     $contact->save();
        //      return "cars data added sussessfully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact=Contact::findOrFail($id);
        return view('showmessage',compact('contact'));
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
        Contact::where('id',$id)->delete();
        return redirect ('m');
    }
    public function send(Request $request){
        $data=new Contact;//we use the same names of the field inside the table
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->massege=$request->massege;
        $data->save();
        Mail::to('doaadewedar63@gmail.com')->send(new ContaxtUs($data));
        dd('sent');

    }
}
