@extends('layout')
@section('content')
<h2>Tambahkan Post baru</h2>
  <form action="{{ url('save') }}" method="POST" >
	  {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Masukkan Judul" name="title">
    </div>
    <div class="form-group">
      <label for="content">Content:</label>
      <textarea class="form-control" id="title" placeholder="Masukkan Isi" name="content" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection