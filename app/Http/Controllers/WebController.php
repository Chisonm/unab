<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parcel;
use App\ParcelLog;

class WebController extends Controller
{
    public function track_order(Request $request){
        $data = $request->validate([
            'track_no' => 'required'
        ]);
        $parcel = Parcel::where('track_no',$data['track_no'])->first();
        if(empty($parcel)){
            return redirect()->back()->with('error','Invalid Tracking Number!');
        }
        $logs = ParcelLog::where('parcel_id',$parcel->id)->orderby('created_at','asc')->get();
        return view('track_details',compact('parcel','logs',));
    }
}
