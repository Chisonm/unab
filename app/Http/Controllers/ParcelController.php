<?php

namespace App\Http\Controllers;

use App\Parcel;
use App\ParcelLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcels = Parcel::orderby('created_at','desc')->get();
        return view('admin.parcel.index',compact('parcels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'sender_name' => 'required',
            'sender_email' => 'required',
            'sender_phone' => 'required',
            'parcel_name' => 'required',
            'pickup_location' => 'required',
            'receiver_name' => 'required',
            'receiver_phone' => 'required',
            'receiver_address' => 'required',
            'fee' => 'required',
        ]);
        $data['admin_id'] = Auth::user()->id;
        $data['status'] = 'Processing';
        $data['track_no'] = $this->track_no();
        Parcel::create($data);
        return redirect()->back()->withStatus('Parcel record saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parcel = Parcel::findorfail($id);
        $logs = ParcelLog::where('parcel_id',$id)->orderby('created_at','desc')->get();
        return view('parcel_log',compact('parcel','logs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function add_log(Request $request){
        $data = $request->validate([
            'parcel_id' => 'required',
            'prev_location' => 'required',
            'curr_location' => 'required',
        ]);
        $data['admin_id'] = Auth::user()->id;
        ParcelLog::create($data);
        return redirect()->back()->withStatus('Parcel log record saved!');
    }

    public function delete_log($id){
        $parcelLog = ParcelLog::findorfail($id);
        $parcelLog->delete();
        return redirect()->back()->withStatus('Parcel log record delete!');
    }


    private function track_no(){
        $code = rand(100000,9999999);
        $check = Parcel::where('track_no',$code)->count();
        if($check == 0){
            return $code;
        }
        else{
            return $this->track_no();
        }
    }
}
