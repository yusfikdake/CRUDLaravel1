@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h4>Tanya</h4></div>

                <div class="card-body">

                <div id="judul">
                    <h4>Judul :</h4>
                    <p>{{$data->judul}}</P><br>
                </div>

                <div id="isi">
                    <h4>Pertanyaan :</h4>
                    <p>{{$data->isi}}</p><br>
                </div>

                <div id="Jawaban">
                    <h4>Jawaban :</h4>
                    <p>{{$data->isi}}</p>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection