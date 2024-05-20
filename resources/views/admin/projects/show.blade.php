@extends('layouts.admin')

@section('content')
    <header class="py-3 bg-primary">
        <div class="container">
            <h1 class="text-white">{{ $project->title }}</h1>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <img src="{{ $project->project_img }}" alt="{{ $project->title }}">
            <p>{{ $project->description }}</p>
        </div>
        <!-- /.container -->
    </section>
@endsection
