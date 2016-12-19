<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Daerah;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use Illuminate\Support\Fecades\Input;



class DaerahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $daerahs = Daerah::orderBy('id','DESC')->paginate(7);
        return view('admin.daerah', compact('daerahs'))->with('i', ($request->input('page', 1) - 1) * 7);
    }

    public function create()
    {
        return view('admin.daerahCreate');
    }

    //input
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_daerah' => 'required',
        ]);
        
        Daerah::create($request->all());
        return redirect()->route('admin.daerah.index')->with('success','data berhasil ditambah');
    }

    public function edit($id)
    {
        $daerah = Daerah::find($id);
        return view('admin.daerahEdit',compact('daerah'));
    }

    //update data
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_daerah' => 'required',
        ]);
        
        Daerah::find($id)->update($request->all());
        return redirect()->route('admin.daerah.index')->with('success','data berhasil diedit');
    }

    // deleteData
    public function destroy($id)
    {
        Daerah::find($id)->delete();
        return redirect()->route('admin.daerah.index')->with('success','data berhasil dihapus');
    }
}
