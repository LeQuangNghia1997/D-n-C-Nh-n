<?php

namespace App\Http\Controllers;

use App\Notifications\ReservationConfirmed;
use App\Reservation;
use App\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    public function reserve(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'dateandtime' => 'required'
        ]);
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->date_and_time = $request->dateandtime;
        $reservation->message = $request->message;
        $reservation->status = false;
        $reservation->save();
        Session::flash('success', 'Đặt bàn thành công!');
        return redirect()->back();
    }
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    }

    public function status($id){
        $reservation = Reservation::find($id);
        $reservation->status = true;
        $reservation->save();
        Notification::route('mail',$reservation->email )
            ->notify(new ReservationConfirmed());
        Session::flash('success','Chấp Nhận Bàn');
        return redirect()->route('reservation.index');
    }
    public function destory($id){
        Reservation::find($id)->delete();
        Session::flash('success','Xóa thành công');
        return redirect()->route('reservation.index');
    }
}
