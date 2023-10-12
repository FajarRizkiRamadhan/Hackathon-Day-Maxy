<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function register(Request $request)
    {
        $this->validate($request, User::rules());
        if (User::where('email', $request->input('email'))->exists()) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Email sudah terdaftar',
                ],400
            );
        }
        $register = new User();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->phone_number = $request->phone_number;
        $register->roles = $request->roles;
        $register->password = Hash::make($request->password);
        $result = $register->save();
        if($result)
        {
            return response()->json(
                            [
                                'success' => true,
                                'message' => 'Register Berhasil',
                                'data' => $register
                            ],201
                        );

        }
        else{
            $data = 'Please try again';
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Registrasi Gagal',
                    'data' => $data
                ],400
            );
        }
        
    }
}
