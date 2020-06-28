@extends('layouts.app')
@section('page_title', $post->title)
@section('content')

<h1> {{$post->title}} </h1>
<p> {{$post->description}} </p>
<p> {{$post->user->name}} </p>
@endsection
