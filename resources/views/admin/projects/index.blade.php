@extends('layouts.admin')

@section('content')
    <header class="py-3 bg-primary">
        <div class="container">
            <h1 class="text-white">Projects</h1>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <h3 class="">All projects</h3>
            <div class="table-responsive">
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">Project Image</th>
                            <th scope="col" class="text-center">Title</th>
                            <th scope="col" class="text-center">Slug</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr class="">
                                <td scope="row" class="text-center">{{ $project->id }}</td>
                                <td class="text-center"><img src="{{ $project->project_img }}" alt=""
                                        width="100"></td>
                                <td class="text-center">{{ $project->title }}</td>
                                <td class="text-center">{{ $project->slug }}</td>
                                <td class="text-center">
                                    <a href="">Show</a>
                                    |
                                    <a href="">Edit</a>
                                    |
                                    <a href=""> Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr class="">
                                <td scope="row" colspan="5">Nothing to display</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.container -->
    </section>
@endsection
