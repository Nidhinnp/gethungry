<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('/css/log.css')}}">


</head>
<body >
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            
                <div class="main">
                    <p>login</p>
                    <form action="{{url('logurl')}}" method="POST">
                    {{csrf_field()}}
                        <ul>
                       @if ($alert = Session::get('alert-success'))
	<div class="alert alert-warning">
		{{ $alert }}
	</div> 
@endif            <li><input type="text" placeholder="Enter your email" name="email"></li>   
                          
                       <li><input type="password" placeholder="Enter password" name="password"></li>     
              
                            </ul>

                            <button class="btn1">log in</button>
                    </form>
                </div>

            </div>

        </div>


    </div>
</body>
</html>