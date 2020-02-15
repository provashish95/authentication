<?php

namespace App\Http\Controllers;

use App\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhoneController extends Controller
{
    public function index(){
        $phones = Phone::all();
//        $phones = DB::table('phones')
//            ->join('customers','phones.customer_id','customers.id')
//            ->select('phones.*','customers.name','customers.email')
//            ->get();
        return view('number', compact('phones'));
    }
}
