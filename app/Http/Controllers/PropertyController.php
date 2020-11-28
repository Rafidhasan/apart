<?php

namespace App\Http\Controllers;

use App\Property;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function home() {
        $cover_properties = Property::orderByDesc('created_at')->limit(3)->get();
        $latest_properties = Property::orderByDesc('created_at')->limit(6)->get();
        return view('index', [
            'cover_properties' => $cover_properties,
            'latest_properties' => $latest_properties
        ]);
    }

    public function index(Request $request) {
        return view('property', [
            'id' => $request->id
        ]);
    }

    public function store(Request $request){
        $property = new Property();
        $property->user_id = $request->id;
        $property->city = $request->city;
        $property->state = $request->state;
        $property->road_no = $request->road_no;
        $property->house_no = $request->house_no;
        $property->area = $request->area;
        $property->beds = $request->beds;
        $property->baths = $request->baths;
        $property->garage = $request->garage;
        $property->amount = $request->amount;
        if($request->balcony == '') {
            $request->balcony = 0;
        }   else {
            $property->balcony = $request->balcony;
        }
        if($request->parking == '') {
            $request->parking = 0;
        }   else {
            $property->parking = $request->parking;
        }
        if($request->deck == '') {
            $request->deck = 0;
        }   else {
            $property->deck = $request->deck;
        }

        if($request->hasfile('property_image')) {
            $user_file = $request->file('property_image');
            $extension = $user_file->getClientOriginalExtension();
            $fileName = time() . '.' .$extension;
            $user_file->move('img/', $fileName);
            $property->property_image = $fileName;
        }   else {
            dd('keno vai');
        }
        $property->save();

        return redirect('/')->with('status', 'Your Property Added');
    }
}
