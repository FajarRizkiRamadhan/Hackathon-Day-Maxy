<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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

    public function getDataUser()
    {
        $users = User::all();
        return response()->json(
            [
                'success' => true,
                'message' => 'List Semua User',
                'data' => $users
            ],200
        );
    }
    public function getDataUserById($id)
    {
        $users = User::find($id);
        if($users){
            return response()->json(
                [
                    'success' => true,
                    'message' => 'User Ditemukan',
                    'data' => $users
                ],200
            );
        }
        else{
                return response()->json(
                    [
                        'success' => false,
                        'message' => 'User Tidak Ditemukan',
                        'data' => null
                    ],404
                );
            }
        
    }
        
    
    public function updateDataUser(Request $request, $id)
        {
            $user = User::find($id);

            if (!$user) {
                return response()->json(['message' => 'User Tidak Ditemukan'], 404);
            }

            $user->update($request->all());

            return response()->json(['message' => 'User Berhasil Diperbarui', 'data' => $user]);
        }
    public function deleteDataUser($id){
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User Tidak Ditemukan'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User Berhasil dihapus']);
    }

}
