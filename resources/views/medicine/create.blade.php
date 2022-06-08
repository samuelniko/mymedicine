@extends('layouts.conquer2')

@section('title')
    Daftar Obat
@endsection

@section('content')

<form method="POST" action="{{route('suppliers.store')}}">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="" class="btn btn-secondary">Cancel</button>
</form>

@endsection