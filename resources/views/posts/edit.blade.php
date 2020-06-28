@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Post aanmaken ofzo</h1>
    <form method="POST" action="{{ route('post.update', $post) }}">
    @CSRF
    @method('put')
        <div class="row">
            <div class="col-md-12">
                <label for="Title">Title</label>
                <input type="text" class="form-control" placeholder="title" name="title" value="{{$post->title}}">
                <label for="Description">Beschrijving</label>
                <input type="text" class="form-control" placeholder="Beschrijving" name="description" value="{{$post->description}}">
                <label for="body">Body</label>
                <input type="text" class="form-control" placeholder="Body" name="body" value="{{$post->body}}">
            </div>
        </div>
        <button class="btn btn-success">Opslaan</button>
    </form>
    <form method="POST" action="{{ route('post.delete', $post) }}">
    @CSRF
    @method('delete')
    <button class="btn btn-danger">Verwijderen</button>
    </form>
</div>
@endsection
