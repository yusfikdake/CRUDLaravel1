@extends('adminlte.master')
@section('content')

<div class='container'>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                
                <h4>Form Input Pertanyaan</h4>
                   
                    <div class="card-body">
                        <form method="POST" action="/pertanyaan">
                            @csrf

                            <div class="form-group">
                                <label for="judul">Judul:</label>
                                <input type="text" name='judul' class="form-control" id="judul">
                            </div>
                            
                            <div class="form-group">
                                <label for="deskripsi">Isi:</label>
                                <textarea type="text" name='isi' class="form-control" rows="5" id="isi"></textarea>
                            </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
         </div>
    </div>
</div>

@endsection