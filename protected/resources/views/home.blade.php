@extends('layout')
@section('content')
@foreach($posts as $post)
<h3>{{ $post->title }}</h3>
<p>{{ $post->content }}</p>
<p><a href="{{ url('edit') }}/{{ $post->id }}">Edit</a> | <a href="{{ url('delete') }}/{{ $post->id }}">Delete</a>
@endforeach
@endsection