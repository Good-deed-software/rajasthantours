<?php

namespace App\Http\Controllers\Int_details;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Int_details;

class Int_detailsController extends Controller
{
    public function index()
    { 
        //$this->authorize('show-user', Int_details::class);
        
       $Int_details = Int_details::paginate(15);

        return view('Int_details.index', compact('Int_details'));
    }

    public function show($id)
    { 
    	//$this->authorize('show-user', Int_details::class);

    	$Int_details = Int_details::find($id);

    	if(!$Int_details){
        	$this->flashMessage('warning', 'Int_details not found!', 'danger');            
            return redirect()->route('Int_details');
        }             
        return view('Int_details.show',compact('Int_details'));
    }

    public function create()
    {
        //$this->authorize('create-user', Int_details::class);
        return view('Int_details.create');
    }

    public function store(Request $request)
    {
       $Int_details = new Int_details;
       $Int_details->title=$request->title;
       $Int_details->description=$request->description;
       $Int_details->Itnerary_date=$request->Itnerary_date;
       $Int_details->long_description=$request->lng_description;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/Int_details',$filename);
           $Int_details['image'] = $filename;
        }

       $Int_details->save();
        $this->flashMessage('check', 'Int_details successfully added!', 'success');

        return redirect()->route('itineraries_details.create');
    }

    public function edit($id)
    { 
    	//$this->authorize('edit-user', Int_details::class);

    	$Int_details = Int_details::find($id);

    	if(!$Int_details){
        	$this->flashMessage('warning', 'Int_details not found!', 'danger');            
            return redirect()->route('Int_details');
        }  
        return view('Int_details.edit',compact('Int_details'));
    }

    public function update(Request $request,$id)
    {
    	//$this->authorize('edit-user', Int_details::class);
        $data = $request->except(['_token','_method','image','lng_description']);
    	$Int_details = Int_details::find($id);

        if(!$Int_details){
        	$this->flashMessage('warning', 'Int_details not found!', 'danger');            
            return redirect()->route('itineraries_details');
        }

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/Int_details',$filename);
            $data['image'] = $filename;
        }
        
        Int_details::whereId($id)->update($data);
        
        $this->flashMessage('check', 'Int_details updated successfully!', 'success');

        return redirect()->route('itineraries_details');
    }

    public function destroy($id)
    {
        //$this->authorize('destroy-user', Int_details::class);

       $Int_details = Int_details::find($id);

        if(!$Int_details){
            $this->flashMessage('warning', 'Int_details not found!', 'danger');            
            return redirect()->route('itineraries_details');
        }

       $Int_details->delete();

        $this->flashMessage('check', 'Int_details successfully deleted!', 'success');

        return redirect()->route('itineraries_details');
    }
}
