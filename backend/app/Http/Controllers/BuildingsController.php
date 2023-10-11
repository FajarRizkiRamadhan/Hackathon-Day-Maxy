<?php

namespace App\Http\Controllers;

class BuildingsController extends Controller
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

    // public function get(){
    //     $data = Building::all();
    //     return response()->json(
    //         [
    //             'success' => true,
    //             'message' => 'List Data Building',
    //             'data' => $data
    //         ],200
    //     );
    // }

    public function add(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'property_image' => 'image',
            'url_image' => 'required|string|max:255',
        ]);

        if ($request->file('property_image')) {
        //     $image_name = time().$request->file('property_image')->store('images', 'public');
        // } else {
        //     $image_name = null;
        // }
        // $image_name = time().$request->file('property_image')->getClientOriginalName();
        // $request->
    }


    }
}
