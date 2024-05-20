@extends('layouts.admin')

@section('content')
    <header class="py-3 bg-primary">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="text-white">Projects</h1>
            <a href="{{ route('admin.projects.create') }}" class="btn btn-dark"><i class="fa fa-pencil" aria-hidden="true"></i>
                Create new project</a>
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
                                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary">Show <i
                                            class="fa fa-eye" aria-hidden="true"></i></a>
                                    |
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-primary">Edit <i
                                            class="fa-solid fa-pen-to-square"></i></a>
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
            {{ $projects->links('pagination::bootstrap-5') }}
        </div>
        <!-- /.container -->
    </section>
@endsection
