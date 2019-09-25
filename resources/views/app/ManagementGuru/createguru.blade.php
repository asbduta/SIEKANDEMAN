@extends('layout.base')
@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>INPUT DATA GURU</h2>
        </div>
         <div class="body">
             <form method="post" class="form-horizontal" action="{{url('/managementguru.store')}}">
             	{{ csrf_field() }}
                 <div class="row clearfix">
                     <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5form-control-label">
                        <label for="nama">Nama</label>
                      </div>
                      <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                          <div class="form-group">
                              <div class="form-line">
                                  <input type="text" name="nama" class="form-control"placeholder="Masukkan Nama Guru">
                               </div>
                           </div>
                       </div>
                  </div>
                   <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5form-control-label">
                            <label for="nip">NIP</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="nip" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                    	<div class="col-lg-2 col-md-2 col-sm-4 col-xs-5form-control-label">
                            <label for="foto">Foto</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" name="foto" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>                              
                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <a href="{{url('/managementguru')}}" class="btn btn-primary m-t-20 waves-effect">Kembali</a>
                            <a href="" class="btn btn-danger m-t-20 waves-effect" type="submit">Simpan</a>
                        </div>
                   </div>
               </form>
           </div>
       </div>
   </div>
@endsection