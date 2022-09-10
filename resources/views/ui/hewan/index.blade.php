@extends('layout.app')
@section('content')
<div class="container mt-5">
  @if (session()->has('message'))
  <div class="alert alert-primary" role="alert">
    {{ session('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
    <div class="card">
        <div class="card-header">
            <a href="{{ route('hewan.create') }}" class="btn btn-primary" role="button" aria-disabled="true">Tambah Hewan</a>
        </div>
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
            @forelse ($data as $hewan )
              <tr>
                <th scope="row">{{$hewan->id}}</th>
                <td>{{$hewan->nama}}</td>
                <td>{{$hewan->jumlah_kaki}}</td>
                <td>{{$hewan->created_at}}</td>
                <td>{{$hewan->updated_at}}</td>
                <td>
                  <a href="{{ route('hewan.detail', $hewan->id) }}" class="btn btn-info" role="button" aria-pressed="true">Detail</a>
                  <a href="{{ route('hewan.update', $hewan->id) }}" class="btn btn-warning" role="button" aria-pressed="true">Update</a>
                  <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                    action="{{ route('hewan.destroy', $hewan->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
                </td>
              </tr>
            @empty
            <tr></tr>
            @endforelse
            </tbody>
          </table>
        </div>
      </div>
</div>
@endsection