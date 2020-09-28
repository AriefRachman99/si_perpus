<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RakModel;

class RakController extends Controller
{
    function index() {
        $rakdata = RakModel::get();
        return view('rak', compact('rakdata'));
    }

    function input() {
        return view('input_rak');
    }

    function input_action(Request $request) {
        $input = new RakModel;
        
        $input->nama_rak = $request->nama_rak_in;
        $input->keterangan = $request->keterangan_in;
        $input->save();
        //dd($input);
        return redirect('rak');
    }

    public function edit($id) {
        $edit = RakModel::find($id);
        return view('edit_rak', compact('edit'));
    }

    public function update(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'nama_rak_up' => 'required',
            'keterangan_up' => 'required'
        ]);

        $update = RakModel::find($request->id_rak_up);
        $update->nama_rak = $request->nama_rak_up;
        $update->keterangan = $request->keterangan_up;
        $update->save();
        // dd($update);

        return redirect('rak');
    }

    function delete($id) {
        $delete = RakModel::find($id);
        $delete->delete();
        return redirect('rak');
    }

}
