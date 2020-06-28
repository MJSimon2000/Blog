@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Post aanmaken ofzo</h1>
    <form method="POST" action="{{ route('post.store') }}">
    @CSRF
        <div class="row">
            <div class="col-md-12">
                <label for="Title">Title</label>
                <input type="text" class="form-control" placeholder="title" name="title">
                <label for="Description">Beschrijving</label>
                <input type="text" class="form-control" placeholder="Beschrijving" name="description">
                <label for="body">Body</label>
                <input type="text" class="form-control" placeholder="Body" name="body">
            </div>
        </div>
        <button class="btn btn-success">Opslaan</button>
    </form>
</div>
@endsection
