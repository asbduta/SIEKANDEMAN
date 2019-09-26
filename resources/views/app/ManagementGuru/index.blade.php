@extends('layout.base')

@section('content')

<div class="card">
  <div class="header">
    <h2> DATA GURU
    <a href="{{url('/managementguru-create')}}" class="btn bg-cyan waves-effect">TAMBAH DATA</a>
  </div>
  </h2>
    <div class="body table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Aksi</th>
          </tr>
      </thead>
      <tbody>
        @foreach($data_guru as $key => $guru)
          <tr>
              <th>{{$key+1}}</th>
              <td>{{$guru->nama}}</td>
              <td>{{$guru->nip}}</td>
              <td><a href="{{ url('managementguru-edit/'.$guru->id)}}" class="btn bg-purple">Edit</a>
                 <a href="{{url('managementguru-del/'.$guru->id)}}"class="btn btn-danger">Hapus</a></td>
          </tr>
          @endforeach
      </tbody>
     </table>


    
     </div>
  </div>
  


@endsection