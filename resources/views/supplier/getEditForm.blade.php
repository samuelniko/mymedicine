<form role="form" method="POST" action="{{url('suppliers/'.$data->id)}}">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-tittle"> Edit Supplier</h4>
    </div>
    <div class="modal-body">
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
        <a href="{{route('suppliers.store')}}" class="btn btn-default">Cancel</button>
    </div>
</form>