@extends('layouts/admin')

@section('content')
    <div class="container">
        <h1>Index</h1>

        <div class="row g-3">
            @foreach ($projects as $project)
                <div class="col-4">
                    <div class="card shadow">
                        <img src="{{ $project->preview }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
