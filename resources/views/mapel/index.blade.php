@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar mapel</div>
                <a href="{{route('mapel.create')}}"
                 class = "btn btn primary float-right">
                tambah pelajaran
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
                            <th>Nomor</th>
                            <th>Nama Pelajaran</th>
                            <th colspan="3">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($mapel as $data)
                        <tr>
                        <td>{{ $no++ }}</td>
                            <td>{{$data->nama}}</td>
            

                         
                            
                            <td>
                                 <a href="{{route('mapel.show',$data->id)}}" class="btn btn-info">Show</a>
                            </td>
                            <td>
                                  <a href="{{route('mapel.edit',$data->id)}}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                            <form action="{{route('mapel.destroy',$data->id)}} " method="POST">
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
