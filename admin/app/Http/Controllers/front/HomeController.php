<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Tour;
use App\Models\Car;
use App\Models\Feedback;
use App\Models\int_details;

class HomeController extends Controller
{
    public function index()
    {
        
        $slider = Slider::paginate(15);
        $testimonial = Testimonial::paginate(15);
        $tour = Tour::paginate(3);
        $travel = Feedback::where('title', '=', 'Culture   and Discovery tips')->get();
        return view('frontend.index', compact('slider','testimonial','tour','travel'));
        
    }
    public function itineraries()
    {
        $tour= Tour::paginate(15);
        return view('frontend.itineraries', compact('tour'));
    }
    public function car_rental()
    {
        $car = Car::get()->first();
        return view('frontend.car_rental', compact('car'));
    }
    public function feedbacks()
    {
        $title = Feedback::get('title');
        $feedback = Feedback::where('title', '=', 'The Essence of Rajasthan')->get();
        $feed = Feedback::where('title', '=', 'The Maharaja Experience')->get();
        $travel = Feedback::where('title', '=', 'Culture   and Discovery tips')->get();
        return view('frontend.feedback', compact('feedback','feed','travel'));
    }
    public function car_rental_details($id)
    {
       $details = Car::find($id);
       
        return view('frontend.car_rental_details',compact('details'));
    }
    public function feedback_details()
    {
       return view('frontend.feedback_details');
    }
    public function itineraries_details()
    {
        $tours = int_details::get()->first();
        $feed = int_details::paginate(15);
        return view('frontend.itineraries_details',compact('tours','feed'));
    }
}
