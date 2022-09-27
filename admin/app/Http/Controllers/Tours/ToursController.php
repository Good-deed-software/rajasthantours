<?php 

namespace App\Http\Controllers\Tours; 

use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use App\Models\Role;
use App\Models\Tour;


class ToursController extends Controller 
{ 
	public function index()
    { 
        //$this->authorize('show-user', Tour::class);

       $tours= Tour::all();
        return view('tour.index', compact('tours'));
    }

    public function show($id)
    { 
    	//$this->authorize('show-user', Tour::class);

    	$tour = Tour::find($id);

    	if(!$tour){
        	$this->flashMessage('warning', 'tour not found!', 'danger');            
            return redirect()->route('tour');
        }             
        return view('users.show',compact('tour'));
    }

    public function create()
    {
        //$this->authorize('create-user', Tour::class);
        return view('tour.create');
    }

    public function store(Request $request)
    {
        //$this->authorize('create-user', Tour::class);

        $tours=new Tour;
        $tours->tittle=$request->tittle;
        $tours->duration=$request->duration;
        $tours->group_info=$request->group_info;
        $tours->destination=$request->destination;
        $tours->description=$request->description;
        $tours->url=$request->url;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/tours',$filename);
            $tours->image = $filename;
        }
       $tours->save();
        $this->flashMessage('check', 'tour successfully added!', 'success');
        return redirect()->route('tour.create');
    }

    public function edit($id)
    { 
    	//$this->authorize('edit-user', Tour::class);

    	$tour = Tour::find($id);

    	if(!$tour){
        	$this->flashMessage('warning', 'tour not found!', 'danger');            
            return redirect()->route('tour');
        }  
        return view('tour.edit',compact('tour'));
    }

    public function update(Request $request,$id)
    {
    	//$this->authorize('edit-user', Tour::class);
        $data = $request->except(['_token','_method','image']);
    	$tour = Tour::find($id);
        

        if(!$tour){
        	$this->flashMessage('warning', 'tour not found!', 'danger');            
            return redirect()->route('tour');
        }

        
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/tours',$filename);
            $data['image'] = $filename;
        }


        Tour::whereId($id)->update($data);
        
        $this->flashMessage('check', 'tour updated successfully!', 'success');

        return redirect()->route('tour');
    }

    public function destroy($id)
    {
        //$this->authorize('destroy-user', Tour::class);

        $tour = Tour::find($id);

        if(!$tour){
            $this->flashMessage('warning', 'tour not found!', 'danger');            
            return redirect()->route('tour');
        }

        $tour->delete();

        $this->flashMessage('check', 'tour successfully deleted!', 'success');

        return redirect()->route('tour');
    }
}