<?php 

namespace App\Http\Controllers\Profile; 

use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use App\Models\Role;
use App\Models\Testimonial;


class ProfileController extends Controller 
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
        //$this->authorize('create-user', Testimonial::class);

        $testimonial = Testimonial::create($request->all());

        $this->flashMessage('check', 'testimonial successfully added!', 'success');

        return redirect()->route('testimonial.create');
    }

    public function edit($id)
    { 
    	//$this->authorize('edit-user', Testimonial::class);

    	$testimonial = Testimonial::find($id);

    	if(!$testimonial){
        	$this->flashMessage('warning', 'testimonial not found!', 'danger');            
            return redirect()->route('testimonial');
        }  
        return view('users.edit',compact('testimonial'));
    }

    public function update(UpdateUserRequest $request,$id)
    {
    	//$this->authorize('edit-user', Testimonial::class);

    	$testimonial = Testimonial::find($id);

        if(!$testimonial){
        	$this->flashMessage('warning', 'testimonial not found!', 'danger');            
            return redirect()->route('testimonial');
        }

        $testimonial->update($request->all());
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