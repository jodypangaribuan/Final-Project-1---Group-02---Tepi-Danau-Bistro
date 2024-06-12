<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
   
    public function index()
    {
        $data['page_title'] = 'Reservation';
        $data['reservation'] = Reservation::orderBy('id','desc')->get();

		return view('reservation.index',$data);
    }

    public function finish($id)
    {
        try {
            $data = Reservation::find($id);
            $data->status = 2;
            $data->save();

            return redirect()->back()->with('success','Save data successfully');

        } catch (\Throwable $th) {
            return redirect()->back()->with('failed','Failed save data successfully');
        }
    }

 
    public function destroy($id)
    {
        try {
            $data = Reservation::find($id);
            $data->delete();
            return redirect()->back()->with('success','delete data successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('failed','Failed delete data successfully');
        }
    }
}
