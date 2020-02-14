<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Ward;
use Illuminate\Http\Request;

class ReservationController extends Controller
{


    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $reservation = Ward::where('name_Ward', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reservation = Ward::latest()->paginate($perPage);
        }

        return view('reservation', compact('reservation'));
    }


    public function create()
    {
        return view('reservationCreate');
    }


    public function store(Request $request)
    {

        $requestData = $request->all();
        Ward::create($requestData);

        return redirect('reservation')->with('flash_message', 'Post added!');
    }


    public function show($id_Reservation)
    {
        $ward = Ward::findOrFail($id_Reservation);

        return view('reservationShow', compact('reservation'));
    }

    public function edit($id_Reservation)
    {
        $ward = Ward::findOrFail($id_Reservation);

        return view('reservationEdit', compact('reservation','id_Reservation'));
    }

    public function update(Request $request, $id_Reservation)
    {

        $requestData = $request->all();
        $ward = Ward::findOrFail($id_Reservation);
        $ward->update($requestData);

        return redirect('reservation')->with('flash_message', 'อัพเดตข้อมูลเรียบร้อย');
    }

    public function destroy($id_Reservation)
    {
        Ward::destroy($id_Reservation);

        return redirect('reservation')->with('flash_message', 'ลบข้อมูลเรียบร้อย');
    }
}
