<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SiswaModel;
use App\Model\KelasModel;
class ManagementSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('app.ManagementSiswa.index');
        /*
            $datagupel = Gupel::with('tahunAjaran')->get();
        return view('app.manajemen_guru_mapel.index',[
            'gupel' => $datagupel
        ]);

        */
            $data_siswa = SiswaModel::with('kelas')->get();
            return view('app.ManagementSiswa.index',['data_siswa'=>$data_siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.ManagementSiswa.createsiswa');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('app.ManagementSiswa.editsiswa');
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
}
