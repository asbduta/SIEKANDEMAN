@extends('layout.base')
@section('content')
<h1>
	APAAN SIIIIIIIIIIIIIIIIH!

</h1>

<div class="card">
  <div class="header">
    <h2> DATA SISWA
    <a href="{{url('/managementsiswa-create')}}" class="btn bg-cyan waves-effect">TAMBAH DATA</a>
  </div>
  </h2>
    <div class="body table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          @foreach($data_siswa as $key => $siswa)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->nis}}</td>
                <td>{{$siswa->kelas->label}}</td>
                <td>{{$siswa->foto}}</td>
                <td><a href="{{url('managementguru-edit/'.$guru->id)}}" class="btn bg-purple">Edit</a>
                   <a href="{{url('managementguru-del/'.$guru->id)}}"class="btn btn-danger">Hapus</a></td>
            </tr>
            @endforeach
        </tbody>
       </table>
     </div>
  </div>
  

@endsection