@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit kelas</div>

                <div class="panel-body">
              <form action="{{route('kelas.update', $kelas->id)}}" method="post">
              <input type="hidden" name="_token" value="{{csrf_token() }}">
             <input type="hidden" name="_method" value="PATCH">
              <div class="form-group">
              <label>Kelas</label>
              <input type="text" name="nama" value="{{$kelas->nama}}" class="form-control" required>
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-primary">udah</button>
              </div>
              </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

