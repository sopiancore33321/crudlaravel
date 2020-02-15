@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Siswa</div>
                <a href="{{route('siswa.create')}}"
                 class = "btn btn primary float-right">
                tambah Siswa
                </a>
            
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="table table-responsive">
                        <table class="table">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Id Kelas</th>
                            <th>Mata Pelajaran</th>
                            <th colspan="3">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($siswa as $data)
                        <tr>
                        <td>{{ $no++ }}</td>
                            <td>{{$data->nis}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->kelas->kelas}}</td>
                            <td>@foreach($data->mapel as $value)
                            <li>{{$value->nama}}</li>
                            @endforeach
                            </td>
                            
                                                
                            <td>
                                 <a href="{{route('siswa.show',$data->id)}}" class="btn btn-info">Show</a>
                            </td>
                            <td>
                                  <a href="{{route('siswa.edit',$data->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                            <form action="{{route('siswa.destroy',$data->id)}} " method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE">
                            

                                  <button type="submit" onclick="return confirm('Apakah anda yakin ?');" class="btn btn-danger">Delete
                                  </button>
                            </td>
                            </form>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
