<?php 

namespace App\Http\Controllers\Profile; 

use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use App\Models\Role;
use App\Models\Car;


class ProfileController extends Controller 
{ 
	public function index()
    { 
        //$this->authorize('show-user', Car::class);

        $car = Car::paginate(15);

        return view('car.index', compact('car'));
    }

    public function show($id)
    { 
    	//$this->authorize('show-user', Car::class);

    	$car = Car::find($id);

    	if(!$car){
        	$this->flashMessage('warning', 'car not found!', 'danger');            
            return redirect()->route('car');
        }             
        return view('users.show',compact('car'));
    }

    public function create()
    {
        //$this->authorize('create-user', Car::class);
        return view('car.create');
    }

    public function store(Request $request)
    {
        //$this->authorize('create-user', Car::class);

        $car = Car::create($request->all());

        $this->flashMessage('check', 'car successfully added!', 'success');

        return redirect()->route('car.create');
    }

    public function edit($id)
    { 
    	//$this->authorize('edit-user', Car::class);

    	$car = Car::find($id);

    	if(!$car){
        	$this->flashMessage('warning', 'car not found!', 'danger');            
            return redirect()->route('car');
        }  
        return view('users.edit',compact('car'));
    }

    public function update(UpdateUserRequest $request,$id)
    {
    	//$this->authorize('edit-user', Car::class);

    	$car = Car::find($id);

        if(!$car){
        	$this->flashMessage('warning', 'car not found!', 'danger');            
            return redirect()->route('car');
        }

        $car->update($request->all());
        $this->flashMessage('check', 'car updated successfully!', 'success');

        return redirect()->route('car');
    }

    public function destroy($id)
    {
        //$this->authorize('destroy-user', Car::class);

        $car = Car::find($id);

        if(!$car){
            $this->flashMessage('warning', 'car not found!', 'danger');            
            return redirect()->route('car');
        }

        $car->delete();

        $this->flashMessage('check', 'car successfully deleted!', 'success');

        return redirect()->route('car');
    }
}