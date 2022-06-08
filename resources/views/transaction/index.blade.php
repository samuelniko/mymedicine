
@extends('layouts.conquer2')

@section('title')
    Daftar Transaksi
@endsection

@section('transaction')

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Pembeli</th>
        <th>Kasir</th>
        <th>Tanggal Transaksi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $li)
      <tr>
        <td>{{ $li->id }}</td>
        <td>{{ $li->buyer->name }}</td>
        <td>{{ $li->user->name }}</td>
        <td>{{ $li->transaction_date }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@endsection