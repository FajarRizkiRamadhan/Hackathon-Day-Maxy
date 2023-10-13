<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;


class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function allData(){
            $customers = Customer::all();
            return response()->json([
                'success' => true,
                'message' => 'List Semua Customer',
                'data' => $customers
            ],200);
        }
        // public function allData() {
        //     $customers = Customer::all();
        //     $customersArray = $customers->toArray(); // Konversi data ke dalam bentuk array
        
        //     if (count($customersArray) > 0) {
        //         return response([
        //             'message' => 'Retrieve All Success',
        //             'data' => $customersArray
        //         ], 200);
        //     } else {
        //         return response([
        //             'message' => 'Empty',
        //             'data' => []
        //         ], 404);
        //     }
        // }
        

    //
}
