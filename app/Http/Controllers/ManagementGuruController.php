<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\guru;
class ManagementGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_guru = guru::All();
        return view('app.ManagementGuru.index',['data_guru'=>$data_guru]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.ManagementGuru.createguru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'nama' =>'required',
        'nip '=>'required',
        'foto'=>'required'
       
       ]);
            guru::create([
        'nama' => $request->nama,
        'nip '=> $request->nip,
        'foto'=> $request->foto
          ]);
        return redirect('managementguru');
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
    public function edit($id)
    {
        $data_guru =guru::find($id);
        //dd($data_guru);
        return view('app.ManagementGuru.editguru',['data_guru'=>$data_guru]);
    //APA LAGI HA?!!!!!!  
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
        /*
        */
    $this->validate($request,[
        //'id'=>'required',
        'nama'=>'required',
        'nip'=>'required',
        'foto'=>'required'
    ]);
    $data_guru = guru::find($request->id);
    $data_guru->nama=$request->nama;
    $data_guru->nip=$request->nip;
    $data_guru->foto=$request->foto;
    $data_guru->save();
    return redirect('managementguru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru =guru::find($id);
        $guru->delete();
        return  redirect('managementguru');
    }
}
