@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Show Mapel</div>

                <div class="panel-body">
              
              <div class="form-group">
              <label>mapel</label>
              <input type="text" name="nama" value="{{$mapel->nama}}"  class="form-control" readonly>
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

