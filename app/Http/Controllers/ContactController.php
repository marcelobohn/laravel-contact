<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Redirect;

class ContactController extends Controller
{
    /**
     * Protect access, except index.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['contacts'] = Contact::orderBy('id','desc')->paginate(10);
   
        return view('contact.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'contact' => 'required|digits:9',
            'email' => 'required|unique:contacts|regex:/^.+@.+$/i',
        ]);
        
        Contact::create($request->all());
    
        return Redirect::to('contacts')->with('success','Greate! Contact created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $where = array('id' => $id);
        $data['contact_info'] = Contact::where($where)->first();
 
        return view('contact.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['contact_info'] = Contact::where($where)->first();
 
        return view('contact.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:5',
            'contact' => 'required|digits:9',
            'email' => 'required|unique:contacts|regex:/^.+@.+$/i',
        ]);
         
        $update = ['name' => $request->name, 'contact' => $request->contact, 'email' => $request->email];
        Contact::where('id',$id)->update($update);
   
        return Redirect::to('contacts')->with('success','Great! Contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::where('id',$id)->delete();
   
        return Redirect::to('contacts')->with('success','Product deleted successfully');
    }
}
