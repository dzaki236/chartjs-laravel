<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('crud.index',['siswa'=>Siswa::all(),'l'=>Siswa::where('jenis_kelamin','l')->count(),'p'=>Siswa::where('jenis_kelamin','p')->count(),]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['*'=>'required'],['required'=>':attribute tidak boleh kosong']);
        $data = Siswa::create($request->all());
        if ($data) {
            # code...
            return redirect()->route('siswa.index')->with(['success'=>'Action Success']);
        }else{
            return redirect()->route('siswa.index')->with(['error'=>'Action Failed']);

        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Siswa::findOrFail($id);
        $datas = $data->delete();
        if ($datas) {
            # code...
            return redirect()->route('siswa.index')->with(['success'=>'Action Success']);
        }else{
            return redirect()->route('siswa.index')->with(['error'=>'Action Failed']);

        }
    }
}
