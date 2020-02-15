@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Siswa</div>

                <div class="panel-body">
              
              <div class="form-group">
              <label>Kelas</label>
              <input type="text" name="nama" value="{{$kelas->kelas}}"  class="form-control" readonly>
              <ul>
              
             @foreach($kelas->siswa as $data)
            <li>{{$data->nama}} - {{$data->nis}}</li>
            @endforeach

             </ul>
              </div>


              </div>
              <div class="form-group">
              <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
              </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

