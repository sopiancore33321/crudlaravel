@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">tambah Daftar Siswa</div>

                <div class="panel-body">
             <!-- @csrf
             @method('PATCH') -->
             <div class="form-group">
              <label>Nis</label>
              <input type="text" name="nis" value="{{$siswa->nis}}" class="form-control" readonly>
              </div>

              <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" value="{{$siswa->nama}}" class="form-control" readonly>
              </div>

              <div class="form-group">
              <label>Alamat</label>
              <textarea name="alamat" class="form-control" required cols="30" rows="5" readonly>{{$siswa->alamat}}</textarea>
              </textarea>
              </div>

              <div class="form-group">
              <label>Kelas</label>
             <input type="text" value="{{$siswa->kelas->kelas}}" name="id_kelas" class="form-control" readonly>
              </div>
              
              <div class="form-group">
            <a href="{{url()->previous() }}" class="btn btn-primary">Kembali</a>
              </div>
              </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
