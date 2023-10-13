<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Room;

class RoomsController extends Controller
{
    public function uploadFoto(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'property_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimum 2MB.
            'url_image' => 'required|string|max:255',
        ]);

        $name = $request->input('name');
        $url_image = $request->input('url_image');

        if ($request->hasFile('property_image')) {
            $image = $request->file('property_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('images', $image, $image_name);

            $uploadFoto = Room::create([
                'name' => $name,
                'property_image' => $image_name,
                'url_image' => $url_image,
            ]);
        } else {
            $uploadFoto = Room::create([
                'name' => $name,
                'property_image' => 'default.png',
                'url_image' => $url_image,
            ]);
        }

        if ($uploadFoto) {
            return response()->json([
                'success' => true,
                'message' => 'Upload foto berhasil',
                'data' => $uploadFoto,
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Upload foto gagal',
                'data' => '',
            ], 400);
        }
    }
}
