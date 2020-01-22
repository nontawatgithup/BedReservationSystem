<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Ward;
use Illuminate\Http\Request;

class WardController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $ward = Ward::where('name_Ward', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ward = Ward::latest()->paginate($perPage);
        }

        return view('ward', compact('ward'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {

        $requestData = $request->all();
        Ward::create($requestData);

        return redirect('ward')->with('flash_message', 'Post added!');
    }


    public function show($id_Ward)
    {
        $ward = Ward::findOrFail($id_Ward);

        return view('show', compact('ward'));
    }

    public function edit($id_Ward)
    {
        $ward = Ward::findOrFail($id_Ward);

        return view('edit', compact('ward','id_Ward'));
    }

    public function update(Request $request, $id_Ward)
    {

        $requestData = $request->all();
        $ward = Ward::findOrFail($id_Ward);
        $ward->update($requestData);

        return redirect('ward')->with('flash_message', 'อัพเดตข้อมูลเรียบร้อย');
    }

    public function destroy($id_Ward)
    {
        Ward::destroy($id_Ward);

        return redirect('ward')->with('flash_message', 'ลบข้อมูลเรียบร้อย');
    }
}
