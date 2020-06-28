@extends('layouts.app')

@section('content')
 @foreach($posts as $post)
    <a href="{{ route('post.show', $post->slug) }}">{{$post->title}}</a>
 @endforeach
@endsection
