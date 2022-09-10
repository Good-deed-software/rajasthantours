<?php 

namespace App\Http\Controllers\Profile; 

use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use App\Models\Role;
use App\Models\Tour;


class ProfileController extends Controller 
{ 
	public function index()
    { 
        //$this->authorize('show-user', Tour::class);

        $tour = Tour::paginate(15);

        return view('tour.index', compact('tour'));
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

        $tour = Tour::create($request->all());

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
        return view('users.edit',compact('tour'));
    }

    public function update(UpdateUserRequest $request,$id)
    {
    	//$this->authorize('edit-user', Tour::class);

    	$tour = Tour::find($id);

        if(!$tour){
        	$this->flashMessage('warning', 'tour not found!', 'danger');            
            return redirect()->route('tour');
        }

        $tour->update($request->all());
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