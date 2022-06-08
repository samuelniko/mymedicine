
@extends('layouts.conquer2')

@section('title')
    Daftar Obat
@endsection

@section('content')

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Form</th>
        <th>Formula</th>
        <th>Description</th>
        <th>Faskes TK1</th>
        <th>Faskes TK2</th>
        <th>Faskes TK3</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Category Id</th>
      </tr>
    </thead>
    <tbody>
        @foreach($listdata as $li)
      <tr>
      <td>{{ $li->generic_name }}</td>
        <td>{{ $li->form }}</td>
        <td>{{ $li->restriction_formula }}</td>
        <td>{{ $li->description }}</td>
        <td>{{ $li->faskes_tk1 }}</td>
        <td>{{ $li->faskes_tk2 }}</td>
        <td>{{ $li->faskes_tk3 }}</td>
        <td>{{ $li->created_at }}</td>
        <td>{{ $li->updated_at }}</td>
        <td>{{ $li->category_id }}</td>
        <td>
          <a class="btn btn-default" data-toggle="modal" href="#detail_{{$li->id}}" 
          data-toggle="modal">{{$li->generic_name }}</a>  

          <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">{{$li->generic_name}}</h4>
                  </div>
                  <div class="modal-body">
                          <img src="{{asset('img/'.$li->id.'.jpg')}}" height='200px' />
                  </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div>
        </td>
        <td>
        @can('delete-permission', $li)    
        <form role="form" method="POST" action="{{url('suppliers/'.$li->id)}}">
              @csrf
              @method("DELETE")
              <input type="submit" value = "Delete" class="btn btn-danger"
              onclick="if(!confirm('are you sure to delete this record?')) return false;" />
        </form>
        @endcan
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
