@extends('layout')
@section('content')
<h2>Tambahkan Post baru</h2>
  <form action="{{ url('edit') }}" method="POST" >
	  {{ csrf_field() }}
	  <input type="hidden" name="id" value="{{ $post->id }}">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Masukkan Judul" name="title" value="{{ $post->title }}">
    </div>
    <div class="form-group">
      <label for="content">Content:</label>
      <textarea class="form-control" id="title" placeholder="Masukkan Isi" name="content" rows="10">{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection