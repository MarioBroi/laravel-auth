@extends('layouts.admin')
@section('content')
    <header class="bg-primary text-white py-3">
        <div class="container">
            <h1>New project</h1>
        </div>
    </header>
    <div class="container py-3">
        <form action="{{ route('admin.projects.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Project title" />
                <small id="titleHelper" class="form-text text-muted">Type a title for this post</small>
            </div>
            <div class="mb-3">
                <label for="project_image" class="form-label">Project image</label>
                <input type="text" class="form-control" name="project_image" id="project_image"
                    aria-describedby="project_imageHelper" placeholder="https://" />
                <small id="project_imageHelper" class="form-text text-muted">Put the project image link</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
