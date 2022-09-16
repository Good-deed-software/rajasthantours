<?php 

namespace App\Http\Controllers\Slider; 

use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request; 
use App\Models\Role;
use App\Models\Slider;


class SliderController extends Controller 
{ 
	public function index()
    { 
        //$this->authorize('show-user', Slider::class);

        $slider = Slider::paginate(15);

        return view('slider.index', compact('slider'));
    }

    public function show($id)
    { 
    	//$this->authorize('show-user', Slider::class);

    	$slider = Slider::find($id);

    	if(!$slider){
        	$this->flashMessage('warning', 'slider not found!', 'danger');            
            return redirect()->route('slider');
        }             
        return view('users.show',compact('slider'));
    }

    public function create()
    {
        //$this->authorize('create-user', Slider::class);
        return view('slider.create');
    }

    public function store(Request $request)
    {
        
        $slider=new Slider;
        if($request->hasfile('slider_image'))
        {
            
            $file = $request->file('slider_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/slider_image',$filename);
            $slider->slider_image = $filename;
        }
        $slider->save();
        $this->flashMessage('success', 'Slider Added', 'success'); 
        return redirect()->back();
    }

    
    public function edit($id)
    { 
    	//$this->authorize('edit-user', Slider::class);

    	$slider = Slider::find($id);

    	if(!$slider){
        	$this->flashMessage('warning', 'Slider not found!', 'danger');            
            return redirect()->route('slider');
        }  
        return view('slider.edit',compact('slider'));
    }

    public function update(Request $request,$id)
    {
    	//$this->authorize('edit-user', Slider::class);

    	$slider = Slider::find($id);

        if($request->hasfile('slider_image'))
        {
            
            $file = $request->file('slider_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/slider_image',$filename);
            $slider->slider_image = $filename;
        }
        $slider->save();
        return redirect()->back();
        $this->flashMessage('success', 'Slider Update', 'success');
    }

    public function destroy($id)
    {
        //$this->authorize('destroy-user', Slider::class);

        $slider = Slider::find($id);
        unlink("upload/slider_image/".$slider->slider_image);
        if(!$slider){
            $this->flashMessage('warning', 'slider not found!', 'danger');            
            return redirect()->route('slider');
        }
        Slider::where("id", $slider->id)->delete();
        $this->flashMessage('check', 'slider successfully deleted!', 'success');
        return redirect()->route('slider');
    }
}