<?php

namespace App\Http\Controllers\Customer;
use Auth;
use App\Parcel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        // fetch parcels created by this user
        $user_id = Auth::user()->id;
        $parcels = Parcel::where('sender_id',$user_id)->get();

        return view('customer.dashboard',[
            'parcels'=>$parcels
        ]);
    }
}
