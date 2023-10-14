<?php

namespace App\Http\Controllers;
use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class BuildingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showallbuilding(){
        $buildings = Building::all();
        if ($buildings->count() === 0) {
            return response()->json([
                'message' => 'Data not found',
            ]);
        }
        return response()->json($buildings);
    }

    public function showidbuilding(){
        $buildings = Building::where('owner_id', Auth::user()->id)->get();
        if ($buildings->count() === 0) {
            return response()->json([
                'message' => 'Data not found',
            ]);
        }
        return response()->json($buildings);
    }

    // public function addbuilding(Request $request){
    //     $validated = $this->validate(
    //         $request, 
    //         [
    //             'name' => 'required|max:255',
    //             'facility' => 'required',
    //             'location' => 'required',
    //             'city' => 'required',
    //             'province' => 'required',
    //             'size' => 'required',
    //             'capacity' => 'required',
    //             'accommodate' => 'required',
    //             'description' => 'required',
    //             'price' => 'required',
    //             'category'=> 'required',
    //             'sub_category' => 'required',
    //             'name_image' => 'required',
    //             'url_image' => 'required',
    //             'property_image' => 'file',
                
    //         ]);
       
    //         $building = new Building();
    //         $building->name = $validated['name'];
    //         $building->facility = $validated['facility'];
    //         $building->location = $validated['location'];
    //         $building->city = $validated['city'];
    //         $building->province = $validated['province'];
    //         $building->size = $validated['size'];
    //         $building->capacity = $validated['capacity'];
    //         $building->accommodate = $validated['accommodate'];
    //         $building->description = $validated['description'];
    //         $building->price = $validated['price'];
    //         $building->category = $validated['category'];
    //         $building->sub_category = $validated['sub_category'];
    //         $building->name_image = $validated['name_image'];
    //         $building->url_image = $validated['url_image'];
    //         $building->owner_id = Auth::user()->id;
    //         if ($request->hasFile('property_image')) {
    //         $image = $request->file('property_image');
    //         $image_name = time() . '.' . $image->getClientOriginalExtension();
    //         Storage::disk('public')->putFileAs('images', $image, $image_name);
    //         $building->property_image = $image_name;
    //         }
    //         $building->save();
    //         return response()->json([
    //             'message' => 'success',
    //             'data' => $building
    //         ]);
    // }

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
    


    public function update(Request $request, $id)
    {
        $building = Building::where('user_id', $id)->where('owner_id', Auth::user()->id)->first();
        if (empty($building)) {
            return response()->json([
                'message' => 'Data not found'
            ]);
        }
        $validated = $this->validate(
            $request, 
            [
                'name' => 'required|max:255',
                'facilities' => 'required',
                'location' => 'required',
                'city' => 'required',
                'province' => 'required',
                'size' => 'required',
                'capacity' => 'required',
                'accommodate' => 'required',
                'description' => 'required',
                'price' => 'required',
                'categorty'=> 'required',
                'sub_category' => 'required',
                'name_image' => 'required',
                'property_image' => 'file',
                'url_image' => 'required',
                
            ]);
            $building->name = $validated['name'];
            $building->facility = $validated['facility'];
            $building->location = $validated['location'];
            $building->city = $validated['city'];
            $building->provinc = $validated['province'];
            $building->size = $validated['size'];
            $building->capacity = $validated['capacity'];
            $building->accommodate = $validated['accommodate'];
            $building->description = $validated['description'];
            $building->price = $validated['price'];
            $building->category = $validated['category'];
            $building->sub_category = $validated['sub_category'];
            $building->name_image = $validated['name_image'];
            $building->url_image = $validated['url_image'];
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
