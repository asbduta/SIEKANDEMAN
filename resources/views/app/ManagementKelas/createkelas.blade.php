@extends('layouts.base')

@section('content')

<div class="col-md-5">
    
    <div class="box">
        <div class="box-header">
          <i class="fa fa-th"></i>
          <h3 class="box-title">Tambah Data Kelas</h3>
        </div>
        
        <div class="box-body">
            <form action="{{url('/kelas/simpan')}}" method="post" >
                {{ csrf_field() }}
                <label for="kelas">Kelas</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="kelas" id="nama" class="form-control" placeholder="Masukkan Kelas">
                        </div>
                    </div>
                    <label for="guru">Wali Kelas</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="guru" id="walikelas" class="form-control" placeholder="Masukkan Nama Wali Kelas">
                        </div>
                    </div>
                    <br>
                <button type="submit" class="btn btn-success m-t-15 waves-effect">SIMPAN</button>
                <a href="{{url('/kelas')}}" class="btn btn-warning m-t-15 waves-effect">KEMBALI</a>
            </form>
        </div>
    </div>
</div>



@endsection