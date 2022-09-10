@extends('layout.app')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('buku.create') }}" class="btn btn-primary" role="button" aria-disabled="true">Tambah Buku</a>
        </div>
        <div class="card-body">
          This is some text within a card body.
        </div>
      </div>
</div>
@endsection