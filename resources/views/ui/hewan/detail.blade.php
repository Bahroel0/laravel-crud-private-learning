@extends('layout.app')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Jumlah Kaki</th>
                <th scope="col">Create At</th>
                <th scope="col">Update At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{$hewan->id}}</th>
                <td>{{$hewan->nama}}</td>
                <td>{{$hewan->jumlah_kaki}}</td>
                <td>{{$hewan->created_at}}</td>
                <td>{{$hewan->updated_at}}</td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection