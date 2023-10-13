<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
     public function login(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Login Failed',
                'data' => ''
            ], 400);
        }
    
        if (Hash::check($password, $user->password)) {
            $apiToken = base64_encode(Str::random(40));
            $user->api_token = $apiToken;
            $user->save();
            // Pemeriksaan peran pengguna
            if ($user->hasRole('customer')) {
                // Pengguna adalah pelanggan, arahkan ke halaman pelanggan
                return response()->json([
                    'success' => true,
                    'message' => 'Login Success',
                    'data' => [
                        'user' => $user,
                        'api_token' => $apiToken
                    ],
                    'redirect' => 'customer-login.html' // Atur rute untuk pelanggan
                ], 201);
            } elseif ($user->hasRole('owner')) {
                // Pengguna adalah pemilik, arahkan ke halaman dashboard admin
                return response()->json([
                    'success' => true,
                    'message' => 'Login Success',
                    'data' => [
                        'user' => $user,
                        'api_token' => $apiToken
                    ],
                    'redirect' => 'dashboard-admin.html' // Atur rute untuk pemilik
                ], 201);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Login Failed',
                'data' => ''
            ], 400);
        }
    }
    
    public function logout(Request $request){
        $apiToken = $request->input('api_token');
        $user = User::where('api_token',$apiToken)->first();
        if($user)
        {
            $user->api_token = null;
            $user->save();
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Logout Success',
                    'data' => ''
                ],201
            );  
        }
        else{
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Logout Failed',
                    'data' => $apiToken
                ],400
            );
        }
    }
}