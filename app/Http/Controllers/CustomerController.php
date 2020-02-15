<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
//         $customers = DB::table('customers')
//                     ->join('phones','customers.id','phones.customer_id')
//                     ->get();
        return view('customer',compact('customers'));
    }
}
