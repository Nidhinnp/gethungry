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
<body>
<div class="container-fluid">
<table class="table table-striped">
<tr>
    <th>id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Password</th>
    
    
    <th></th>
</tr>
@foreach($DATAS as $data)
<tr>
    <td>{{$data->id}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>
    <td>{{$data->contact}}</td>
    <td>{{$data->password}}</td>
 
    <td><a onclick="return confirm('Are you want to abort the User')" href="{{url('abortuser/'.$data->id)}}">Abort</a></td>
</tr>
@endforeach
</table>    
</div>
</body>
</html>