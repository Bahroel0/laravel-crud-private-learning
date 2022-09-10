@extends('layout.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Update Data Hewan
        </div>
        <div class="card-body">
            <form method="POST" action="{{route("hewan.saveUpdate", $hewan->id)}}" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label for="field-nama">Nama</label>
                    <input type="text" name="nama" value="{{$hewan->nama}}" class="form-control" id="field-nama" aria-describedby="emailHelp" placeholder="nama">
                </div>
                <div class="form-group">
                    <label for="field-jumlah-kaki">Jumlah Kaki</label>
                    <input type="number" name="jumlah_kaki" value="{{$hewan->jumlah_kaki}}" class="form-control" id="field-jumlah-kaki" placeholder="Jumlah kaki">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection