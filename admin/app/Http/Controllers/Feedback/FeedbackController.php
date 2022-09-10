<?php 

namespace App\Http\Controllers\Profile; 

use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use App\Models\Role;
use App\Models\Feedback;


class ProfileController extends Controller 
{ 
	public function index()
    { 
        //$this->authorize('show-user', Feedback::class);

        $feedback = Feedback::paginate(15);

        return view('feedback.index', compact('feedback'));
    }

    public function show($id)
    { 
    	//$this->authorize('show-user', Feedback::class);

    	$feedback = Feedback::find($id);

    	if(!$feedback){
        	$this->flashMessage('warning', 'feedback not found!', 'danger');            
            return redirect()->route('feedback');
        }             
        return view('users.show',compact('feedback'));
    }

    public function create()
    {
        //$this->authorize('create-user', Feedback::class);
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        //$this->authorize('create-user', Feedback::class);

        $feedback = Feedback::create($request->all());

        $this->flashMessage('check', 'feedback successfully added!', 'success');

        return redirect()->route('feedback.create');
    }

    public function edit($id)
    { 
    	//$this->authorize('edit-user', Feedback::class);

    	$feedback = Feedback::find($id);

    	if(!$feedback){
        	$this->flashMessage('warning', 'feedback not found!', 'danger');            
            return redirect()->route('feedback');
        }  
        return view('users.edit',compact('feedback'));
    }

    public function update(UpdateUserRequest $request,$id)
    {
    	//$this->authorize('edit-user', Feedback::class);

    	$feedback = Feedback::find($id);

        if(!$feedback){
        	$this->flashMessage('warning', 'feedback not found!', 'danger');            
            return redirect()->route('feedback');
        }

        $feedback->update($request->all());
        $this->flashMessage('check', 'feedback updated successfully!', 'success');

        return redirect()->route('feedback');
    }

    public function destroy($id)
    {
        //$this->authorize('destroy-user', Feedback::class);

        $feedback = Feedback::find($id);

        if(!$feedback){
            $this->flashMessage('warning', 'feedback not found!', 'danger');            
            return redirect()->route('feedback');
        }

        $feedback->delete();

        $this->flashMessage('check', 'feedback successfully deleted!', 'success');

        return redirect()->route('feedback');
    }
}