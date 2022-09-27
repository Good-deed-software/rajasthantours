<?php 

namespace App\Http\Controllers\Car; 

use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; 
use App\Models\Role;
use App\Models\Car;


class CarController extends Controller 
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
        $car = new Car;

        $car->title=$request->title;
        $car->carname=$request->carname;
        $car->url=$request->url;
        $car->specs=$request->specs;
        $car->description=$request->description;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/cars',$filename);
            $car['image'] = $filename;
        }

        $car->save();
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
        return view('car.edit',compact('car'));
    }

    public function update(Request $request,$id)
    {
    	//$this->authorize('edit-user', Car::class);
        $data = $request->except(['_token','_method','image']);
    	$car = Car::find($id);

        if(!$car){
        	$this->flashMessage('warning', 'car not found!', 'danger');            
            return redirect()->route('car');
        }

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('upload/cars',$filename);
            $data['image'] = $filename;
        }


        Car::whereId($id)->update($data);
        
        $this->flashMessage('check', 'Cars updated successfully!', 'success');

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