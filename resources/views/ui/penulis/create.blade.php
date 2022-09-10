@extends('layout.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Form Tambah Penulis
        </div>
        <div class="card-body">
            <form method="POST" action="{{route("penulis.store")}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="field-nama">Nama</label>
                    <input type="text" class="form-control" id="field-nama" placeholder="Input Nama">
                </div>
                <div class="form-group">
                    <label for="field-umur">Umur</label>
                    <input type="password" class="form-control" id="field-umur" placeholder="Input Umur">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection