
@extends('layouts.conquer2')

@section('title')
    Daftar Kategori Obat
@endsection

@section('content')

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <!-- <th>Form</th> -->
        <!-- <th>Formula</th> -->
        <th>Description</th>
        <!-- <th>Faskes TK1</th>
        <th>Faskes TK2</th>
        <th>Faskes TK3</th> -->
        <th>Created At</th>
        <th>Updated At</th>
        <!-- <th>Category Id</th> -->
      </tr>
    </thead>
    <tbody>
        @foreach($datas as $li)
      <tr>
      <td>{{ $li->name }}</td>
        <td>{{ $li->description }}</td>
        <td>{{ $li->created_at }}</td>
        <td>{{ $li->updated_at }}</td>
        <td><a href="{{ url('kategori/'.$li->id.'/edit') }}" class="btn btn-primary" >Edit</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
