<?php 

namespace App\Http\Controllers\Profile; 

use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use App\Models\Role;
use App\Models\Slider;


class ProfileController extends Controller 
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
        //$this->authorize('create-user', Slider::class);

        $slider = Slider::create($request->all());

        $this->flashMessage('check', 'Slider successfully added!', 'success');

        return redirect()->route('slider.create');
    }

    public function edit($id)
    { 
    	//$this->authorize('edit-user', Slider::class);

    	$slider = Slider::find($id);

    	if(!$slider){
        	$this->flashMessage('warning', 'Slider not found!', 'danger');            
            return redirect()->route('slider');
        }  
        return view('users.edit',compact('slider'));
    }

    public function update(UpdateUserRequest $request,$id)
    {
    	//$this->authorize('edit-user', Slider::class);

    	$slider = Slider::find($id);

        if(!$slider){
        	$this->flashMessage('warning', 'slider not found!', 'danger');            
            return redirect()->route('slider');
        }

        $slider->update($request->all());
        $this->flashMessage('check', 'slider updated successfully!', 'success');

        return redirect()->route('slider');
    }

    public function destroy($id)
    {
        //$this->authorize('destroy-user', Slider::class);

        $slider = Slider::find($id);

        if(!$slider){
            $this->flashMessage('warning', 'slider not found!', 'danger');            
            return redirect()->route('slider');
        }

        $slider->delete();

        $this->flashMessage('check', 'slider successfully deleted!', 'success');

        return redirect()->route('slider');
    }
}