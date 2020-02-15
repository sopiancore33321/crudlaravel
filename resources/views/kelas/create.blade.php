@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">tambah kelas</div>

                <div class="panel-body">
              <form action="{{route('kelas.store')}}" method="post">
             <input type="hidden" name="_token" value="{{csrf_token() }}">
             
              <div class="form-group">
              <label>Kelas</label>
              <input type="text" name="nama" class="form-control" required>
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

