<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Aset;

class AsetController extends Controller
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

    public function all(){
        $asets = Aset::all();
        if($asets->count()==0){
            return response()->json(
                [
                    'message' => 'Data not found',
                ]
                );
        }
        return response()->json([
            'success' => true,
            'message' => 'List Semua Customer',
            'data' => $asets
        ],200);
        
    }

    public function allauth(){
        $asets = Aset ::where('perusahaan_id', Auth::user()->id)->get();
        if($asets->count() == 0 ){
            return response()->json([
                'message'=>'Data not foun',
            ]);
        }
        return response()->json([
            'message'=>'Success',
            'data'=> $asets
        ]);

    }

    public function add(Request $request){
        $validated = $this->validate(
            $request,
            [
                'perusahaan' => 'required',
                'alamat' => 'required'
            ]
        );
        $asets = new Aset();
        $asets->perusahaan = $validated['perusahaan'];
        $asets->alamat = $validated['alamat'];
        $asets->perusahaan_id  = Auth::user()->id;
        $asets->save();
        
        return response()->json([
            'message' => 'success',
            'data' =>$asets
        ]);
    }

    public function update(Request $request, $id){
        $asets = Aset::where('user_id', id)->where('perusahaan_id', Auth::user()->id)->frist();
        if(!$asets){
            return response()->json([
                'message' => 'Data not found'
            ]);
        }
        $validated = $this->validate(
            $request,
            [
                'perusahaan' => 'required',
                'alamat' => 'required'
            ]
        );
        $asets = new Aset();
        $asets->perusahaan = $validated['perusahaan'];
        $asets->alamat = $validated['alamat'];
        $asets->perusahaan_id  = Auth::user()->id;
        $asets->save();      
        return response()->json([
            'message' => 'success',
            'data' =>$asets
        ]);
    }



    public function delete(Request $request, $id){
        // Menggunakan parameter $id yang diterima dari URL
        $asets = Aset::where('perusahaan_id', Auth::user()->id)->first();
    
        if(empty($asets)){
            return response()->json([
                'message' => 'Data not found'
            ]);
        }
    
        $asets->delete();
    
        return response()->json([
            'message' => 'Data dihapus',
        ]);
    }
    
    // public function delete(){
    //     $asets = Aset::where('user_id', $id)->where('perusahaan_id', Auth::user()->id)->frist();
    //     if(empty($asets)){
    //         return response()->json([
    //             'message' => 'Data not found'
    //         ]);
    //     }
    //     $asets->delete();
    //     return response()->json(
    //         [
    //             'message'=>'Data dihapus',
    //         ]
    //         );
    // }
}
