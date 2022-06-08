@extends('layouts.conquer2')

@section('title')
    Edit Supplier
@endsection

@section('content')

<form role="form" method="POST" action="{{url('suppliers/'.$data->id)}}">
    @csrf
    @method("PUT")
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <textarea class="form-control" row="3" id="address" name="address">{{$data->address}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
  <button type="" class="btn btn-secondary">Cancel</button>
</form>

@endsection