<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  div{
    border:1px black;
  }
</style>
<body>
    
<div class="portlet">
    <div class="portlet-title">
        <b>Tampilan transaksi dari : {{$data->id}} - {{$data->transaction_date}}</b>
    </div>
    <div class="portlet-body">
        <div class="row">
            @foreach($dataproduk as $dp)
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="data:image/svg+xml;base64,">
                    <div class="caption">
                        <p text-align='center'><b>{{$dp->generic_name}}</b></p>
                        <hr/>
                        <p>Kategori : {{$dp->category->name}}</p>
                        <p>Harga : Rp. {{$dp->price}} ,- </p>
                        <p>Jumlah Beli : {{$dp->pivot->quantity}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

</body>
</html>