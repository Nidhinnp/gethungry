
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="{{asset('/css/.css')}}">
</head>
<style>
img{
    height: 100px;
    width: 200px;
}
</style>
<body>
<div class="container-fluid">
<table class="table table-striped">
<tr>
    <th>id</th>
    <th> Restaurant Name</th>
    <th>Address</th>
    <th>Owner Name</th>
    <th>Email</th>
    <th>Landline</th>
    <th>Mobile</th>
    <th>password</th>
    <th>status</th>
    <th>Licence</th>
    <th>verification</th>
    <th></th>
    
</tr>
@foreach($DATAS as $data)
<tr>
    <td>{{$data->id}}</td>
    <td>{{$data->rname}}</td>
    <td>{{$data->address}}</td>
    <td>{{$data->oname}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->lan}}</td>
    <td>{{$data->contact}}</td>
    <td>{{$data->password}}</td>
    <td>{{$data->status}}</td>
    <td><img  src="/storage/profile/{{$data->file}}" alt=""></td>
    <td><a onclick="return confirm('Are you Sure to approve the Restaurant')" href="{{url('approve/'.$data->id)}}">Approve</a></td>
    <td><a onclick="return confirm('Are you want to abort the Restaurant')" href="{{url('aborted/'.$data->id)}}">Abort</a></td>
</tr>
@endforeach
</table>    
</div>

    
</body>
</html>