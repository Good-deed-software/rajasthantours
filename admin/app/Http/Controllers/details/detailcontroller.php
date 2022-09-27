<?php

namespace App\Http\Controllers\Details;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Http\Request;

class Detailcontroller extends Controller
{
    public function index()
    { 
        //$this->authorize('show-user', Detail::class);
        
       $detail = Detail::paginate(15);

        return view('detail.index', compact('detail'));
    }

    public function show($id)
    { 
    	//$this->authorize('show-user', Detail::class);

    	$detail = Detail::find($id);

    	if(!$detail){
        	$this->flashMessage('warning', 'Detail not found!', 'danger');            
            return redirect()->route('Detail');
        }             
        return view('detail.show',compact('detail'));
    }

    public function create()
    {
        //$this->authorize('create-user', Detail::class);
        return view('Detail.create');
    }

    public function store(Request $request)
    {
       $detail = new Detail;
       $detail->heading=$request->heading;
       $detail->title=$request->title;
       $detail->price=$request->price;
       $detail->duration=$request->duration;
       $detail->description=$request->description;


        if($request->hasfile('image1'))
        {
            $file = $request->file('image1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/Details',$filename);
           $detail['image1'] = $filename;
        }

        if($request->hasfile('image2'))
        {
            $file = $request->file('image2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/Details',$filename);
           $detail['image2'] = $filename;
        }

       $detail->save();
        $this->flashMessage('check', 'Detail successfully added!', 'success');

        return redirect()->route('details.create');
    }

    public function edit($id)
    { 
    	//$this->authorize('edit-user', Detail::class);

    	$detail = Detail::find($id);

    	if(!$detail){
        	$this->flashMessage('warning', 'Detail not found!', 'danger');            
            return redirect()->route('Detail');
        }  
        return view('Detail.edit',compact('detail'));
    }

    public function update(Request $request,$id)
    {
    	//$this->authorize('edit-user', Detail::class);
        $data = $request->except(['_token','_method','image1','image2']);
    	$detail = Detail::find($id);

        if(!$detail){
        	$this->flashMessage('warning', 'Detail not found!', 'danger');            
            return redirect()->route('Detail');
        }

        if($request->hasfile('image1'))
        {
            $file = $request->file('image1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/Details',$filename);
            $data['image1'] = $filename;
        }
        if($request->hasfile('image2'))
        {
            $file = $request->file('image2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/Details',$filename);
            $data['image2'] = $filename;
        }

        Detail::whereId($id)->update($data);
        
        $this->flashMessage('check', 'Details updated successfully!', 'success');

        return redirect()->route('details');
    }

    public function destroy($id)
    {
        //$this->authorize('destroy-user', Detail::class);

       $detail = Detail::find($id);

        if(!$detail){
            $this->flashMessage('warning', 'Detail not found!', 'danger');            
            return redirect()->route('details');
        }

       $detail->delete();

        $this->flashMessage('check', 'Detail successfully deleted!', 'success');

        return redirect()->route('details');
    }
}
