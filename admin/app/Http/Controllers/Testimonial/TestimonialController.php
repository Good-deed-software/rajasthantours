<?php 

namespace App\Http\Controllers\Testimonial; 

use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use App\Models\Role;
use App\Models\Testimonial;


class TestimonialController extends Controller 
{ 
	public function index()
    { 
        //$this->authorize('show-user', Testimonial::class);

        $testimonial = Testimonial::paginate(15);

        return view('testimonial.index', compact('testimonial'));
    }

    public function show($id)
    { 
    	//$this->authorize('show-user', Testimonial::class);

    	$testimonial = Testimonial::find($id);

    	if(!$testimonial){
        	$this->flashMessage('warning', 'testimonial not found!', 'danger');            
            return redirect()->route('testimonial');
        }             
        return view('users.show',compact('testimonial'));
    }

    public function create()
    {
        //$this->authorize('create-user', Testimonial::class);
        return view('testimonial.create');
    }

    public function store(Request $request)
    {
        $testimonial=new Testimonial;
        $testimonial->name = $request->input('name');
        $testimonial->city = $request->input('city');
        $testimonial->description = $request->input('description');
        $testimonial->save();
        $this->flashMessage('success', 'testimonial Added', 'success');   
        return view('testimonial.create');
    }

    public function edit($id)
    { 
    	//$this->authorize('edit-user', Testimonial::class);

    	$testimonial = Testimonial::find($id);

    	if(!$testimonial){
        	$this->flashMessage('warning', 'testimonial not found!', 'danger');            
            return redirect()->route('testimonial');
        }  
        return view('testimonial.edit',compact('testimonial'));
    }

    public function update(request $request,$id)
    {
    	//$this->authorize('edit-user', Testimonial::class);

    	$testimonial = Testimonial::find($id);

        $testimonial->name = $request->input('name');
        $testimonial->city = $request->input('city');
        $testimonial->description = $request->input('description');
        if(!$testimonial){
        	$this->flashMessage('warning', 'testimonial not found!', 'danger');            
            return redirect()->route('testimonial');
        }

        $testimonial->update();
        $this->flashMessage('check', 'testimonial updated successfully!', 'success');

        return redirect()->route('testimonial');
    }

    public function destroy($id)
    {
        //$this->authorize('destroy-user', Testimonial::class);

        $testimonial = Testimonial::find($id);

        if(!$testimonial){
            $this->flashMessage('warning', 'testimonial not found!', 'danger');            
            return redirect()->route('testimonial');
        }

        $testimonial->delete();

        $this->flashMessage('check', 'testimonial successfully deleted!', 'success');

        return redirect()->route('testimonial');
    }
}