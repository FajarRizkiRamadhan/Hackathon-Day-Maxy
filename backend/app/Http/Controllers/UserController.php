<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(){
        $this->middleware('authapi');
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
                return response()->json(['message' => 'Pengguna tidak ditemukan'], 404);
            }

            $this->validate($request, [
                'name' => 'string',
                'phone_number' => 'string',
                'password' => 'string',
            ]);

            if ($request->has('name')) {
                $user->name = $request->input('name');
            }

            if ($request->has('phone_number')) {
                $user->phone_number = $request->input('phone_number');
            }

            if ($request->has('password')) {
                $user->password = Hash::make($request->input('password'));
            }

            if ($user->save()) {
                return response()->json(['message' => 'Data pengguna berhasil diperbarui', 'data' => $user]);
            } else {
                return response()->json(['message' => 'Gagal memperbarui data pengguna'], 500);
            }
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
