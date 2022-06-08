@extends('layouts.conquer2')

@section('title')
    Daftar Kategori
@endsection

@section('content')

<form method="POST" action="{{route('kategori.store')}}">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi</label>
    <textarea class="form-control" row="3" id="deskripsi" name="deskripsi"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="" class="btn btn-secondary">Cancel</button>
</form>

@endsection