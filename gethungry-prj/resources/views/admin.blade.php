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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">

</head>
<body>
    <div class="container-fluid">
        <nav class=" navbar-fixed-top"> 
        <div class="row" style="background-color: black; height: 75px;">
            
            <div class="col-md-12">
            
                <div class="nav_bar">
               
               <img src="{{asset('images/logo/mainlogo.png')}}" alt="" id="mlogo">
                
                    <div class="nav_links">
                    <a href="{{url('/')}}"> <button type="button" class="btn">SIGN OUT</button></a> 
                        <ul>
                        <a href=""><li id="home"><a href="{{url('home')}}">HOME</a> </li></a>
                        <a href="" ><li id="log"><a href="{{url('logi/')}}">ADMIN</a> </li></a> 
                        </ul>
                    </div>
                
                </div>
            </div>
       
        </div>
    
        </nav>

        <div class="row"> 
        <div class="col-md-4">  
        <div class="he">   
            <div class="menus">
                <nav class="mainNavbar">
                    <ul class="nav navbar-nav" id="menu">
                        <br>
                       <a href="{{url('admin_user')}}"><li class="menul" id="m1">USER DATAS</li></a> <br>
                        <a href="{{url('admin_res')}}"><li class="menul" id="m2">RESTAURANT DATAS</li><br></a>
                   
                  

                    </ul>

                </nav>

            </div>
        </div>

        </div>    
        <div class="col-md-8">
        <div class="rdata">
        </div>
        
        </div>
       
        </div>       
    </div>
</body>
</html>