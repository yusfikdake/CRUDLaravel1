@extends('adminlte.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4>Daftar Mahasiswa</h4></div>
                    <div class="card-body">
                        <div><a href="/pertanyaan/create" class="btn btn-info" role="button">Insert</a></div><br>


                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Isi</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0;?>
                        @foreach($items as $nilai)
                            <?php $no++ ;?>
                                <tr>
                                <td>{{ $no }}</td>      
                                <td>{{$nilai->judul}}</td>
                                <td>{{$nilai->isi}}</td>
                                <td>
                                <a href="/jawaban/{{$nilai->id}}">Lihat</a> |
                                <a href="/delete/{{$nilai->id}}">Edit</a>                    
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