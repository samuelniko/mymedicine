@extends('layouts.conquer2')

@section('title')
    Daftar Obat
@endsection

@section('javascript')
  <script>
    function getEditForm(id)
    {
      $.ajax({
        type:'POST',
        url:"{{route('supplier.getEditForm')}}",
        data:{'_token': '<?php echo csrf_token() ?>', 'id':id},
        success: function(data) {
          $('#modalContent').html(data.msg)
        }
      });
    }

    function getEditForm2(id)
    {
      $.ajax({
        type:'POST',
        url:"{{route('supplier.getEditForm2')}}",
        data:{'_token': '<?php echo csrf_token() ?>', 'id':id},
        success: function(data) {
          $('#modalContent').html(data.msg)
        }
      });
    }
  </script>
@endsection

@section('content')

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>
  <!-- <a href="#modalCreate" data-toggle='modal' class='btn btn-info'>
    + Supplier Baru (modal)
  </a>   -->
  <a href="#modalCreate" data-toggle='modal' class='btn btn-info'>
    + Supplier Baru (modal)
  </a>
  <div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" 
            data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">Add New Supplier</h4>
        </div>
        <div class="modal-body">
        <form method="POST" action="{{route('suppliers.store')}}">
            @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Your Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <textarea class="form-control" row="3" id="address" name="address"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="{{route('suppliers.store')}}" class="btn btn-default">Cancel</a>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Created At</th>
        <th>Updated At</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listdata as $li)
      <tr>
      <td id='td_name_{{$li->name}}'>{{ $li->name }}</td>
        <td id='td_address_{{$li->address}}'>{{ $li->address }}</td>
        <td>{{ $li->created_at }}</td>
        <td>{{ $li->updated_at }}</td>
        <td>
          <a href="{{ url('suppliers/'.$li->id.'/edit') }}" class="btn btn-primary" >Edit</a>
          <a href="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs' 
              onclick="getEditForm({{$li->id}})"> + Edit A</a>

          <a href="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs' 
              onclick="getEditForm2({{$li->id}})"> + Edit B</a>

          <div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" id='modalContent'>
              </div>
            </div>
          </div>

          

        </td>
        <td>
        @can('delete-permission', $li)    
        <form role="form" method="POST" action="{{url('obat/'.$li->id)}}">
              @csrf
              @method("DELETE")
              <input type="submit" value = "Delete" class="btn btn-danger"
              onclick="if(!confirm('are you sure to delete this record?')) return false;" />
        </form>
        @endcan
        </td>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <!-- @foreach($listdata as $li)
  <table>
    <div>
    <img src="{{asset('img/'.$li->image.'.jpg')}}"/>
    </div>

    <div>
    {{ $li->generic_name }}
    </div>
    
  </table>
  @endforeach -->
</div>


@endsection
