@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">tambah Daftar Siswa</div>

                <div class="panel-body">
              <form action="{{route('siswa.update', $siswa->id)}}" method="post">
             <input type="hidden" name="_token" value="{{csrf_token() }}">
             <input type="hidden" name="_method" value="PATCH">
             <!-- @csrf
             @method('PATCH') -->
             <div class="form-group"
             >
              <label>Nis</label>
              <input type="text" name="nis" value="{{$siswa->nis}}" class="form-control" required>
              </div>

              <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" value="{{$siswa->nama}}" class="form-control" required>
              </div>

              <div class="form-group">
              <label>Alamat</label>
              <textarea name="alamat" class="form-control" required cols="30" rows="10">{{$siswa->alamat}}</textarea>
              </textarea>
              </div>
              <div class="form-group">
              <label>Kelas</label>
             <select name="id_kelas" class="form-control">
             @foreach($kelas as $data)

             <option value="{{$data->id}}"
              {{ $data->id == $siswa->id_kelas ? 'selected' : '' }}>{{$data->kelas}}

              </option>

             @endforeach
             </select>
              </div>

              <div class="form-group">
              <label for="">Mata pelajaran</label>
              <select name="mapel[]" class="form-control" multiple>
              @foreach($mapel as $data)
              <option value="{{$data->id}}" {{ (in_array($data->id, $selected)) ? 'selected="selected"' : '' }}>
              {{$data->nama}}
              </option>
              @endforeach
              </select>
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
