@extends('layouts/admin')

@section('content')
    <div class="container">
        <h1 class="mb-5">Pagina di amministrazione</h1>

        <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Vedi tutti i progetti</a>

        <a class="btn btn-secondary" href="{{ route('admin.projects.create') }}">Inserisci un nuovo progetto</a>
    </div>
@endsection
