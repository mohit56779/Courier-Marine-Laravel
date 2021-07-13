<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Parcel;
use Auth;

class ParcelController extends Controller
{
    public function index(){
        return view('customer.parcel.index');
    }

    public function store(Request $request){
        $this->validate($request,[
            'pickup_address' => 'required',
            'dropoff_address' => 'required',
            'pickup_date' => 'required'
        ]);

        $parcel = new Parcel;
        $parcel->pickup_address = $request->pickup_address;
        $parcel->drop_off_address = $request->dropoff_address;
        $parcel->pickup_date = $request->pickup_date;
        $parcel->status = "requested";
        $parcel->sender_id = Auth::user()->id;
        $parcel->save();
        return redirect()->back()->with('success','new delivery request created successfully!');


}
}