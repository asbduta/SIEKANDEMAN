@extends('layouts.base')

@section('content')
<section class="content">
<div class="box">
<div class="box-header">
  <h3 class="box-title">Data Kelas</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
  <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
    <div class="row">
      <div class="col-sm-6"></div>
      <div class="col-sm-6"></div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <a href="{{url('/kelas/createkelas')}}" class="btn btn-primary">Tambah Data Kelas</a>
          <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
              <tr role="row">
                <th>No</th>
                <th>Kelas</th>
                <th>Wali Kelas</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
               @foreach($data_kelas as $key => $kelas)
              <tr>
                <th>{{$key+1}}</th>
                <td>{{$kelas->kelas}}</td>
                <td>{{$kelas->guru->nama}}</td>
                <td>
                  <a href="{{url('/kelas/edit'.$kelas->id)}}" class="btn btn-primary">Edit</a>
                  <a href="{{url('/kelas/hapus'.$kelas->id)}}" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
                @endforeach
            </tbody>  
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
          



    
    
  </section>


@endsection