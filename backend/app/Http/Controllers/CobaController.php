<?php

namespace App\Http\Controllers;
use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class CobaController extends Controller{
    public function addbuilding(Request $request) {
        $building = new Building();
        $building->name = $request->input('name');
        $building->facility = $request->input('facility');
        $building->location = $request->input('location');
        $building->city = $request->input('city');
        $building->province = $request->input('province');
        $building->size = $request->input('size');
        $building->capacity = $request->input('capacity');
        $building->accommodate = $request->input('accommodate');
        $building->description = $request->input('description');
        $building->price = $request->input('price');
        $building->category = $request->input('category');
        $building->sub_category = $request->input('sub_category');
        $building->name_image = $request->input('name_image');
        $building->url_image = $request->input('url_image');
        $building->owner_id = Auth::user()->id;
    
        if ($request->hasFile('property_image')) {
            $image = $request->file('property_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('images', $image, $image_name);
            $building->property_image = $image_name;
        }
    
        $building->save();
    
        return response()->json([
            'message' => 'success',
            'data' => $building
        ]);
    }

}