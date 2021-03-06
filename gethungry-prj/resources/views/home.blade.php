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
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">

</head>

<body>
    <div class="container-fluid">
        <nav class=" navbar-fixed-top">
            <div class="row" style="background-color: black; height: 75px;">

                <div class="col-md-12">

                    <div class="nav_bar">

                        <img src="{{asset('images/logo/mainlogo.png')}}" alt="" id="mlogo">

                        <div class="nav_links">
                           
                                @if(session()->has('user_name'))
                                
                               
                                <a href="{{url('logout')}}"> <button type="button" class="btn">SIGN OUT </button></a>
                            <ul>
                                <a href="">
                                    <li class="home"><a href="{{url('home')}}">HOME</a> </li>
                                </a>

                                <a href="">
                                    <li class="log"><a href="{{url('userprofileedit')}}">{{session()->get('user_name')}}</a> </li>
                                </a>
                                 @else
                                
                                <a href="{{url('usignup')}}"> <button type="button" class="btn">SIGN UP</button></a>
                                   
                                <li class="log"><a href="{{url('login' )}}">LOG IN   </a> </li>
                              
                                    <li class="home"><a href="{{url('home')}}">HOME</a> </li>
                                </a>
                                @endif
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </nav>
        <div class="row">
            <div class="col-md-8">
                <div class="fcard">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="5000">
                        <!--         
                                    <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol> -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('images/card photo/card2.jpg')}}" class="imgc" alt="...">

                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/card photo/card1.jpg')}}" class="imgc" alt="...">

                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/card photo/card3.jpg')}}" class="imgc" alt="...">

                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="menus">
                    <nav class="mainNavbar">
                        <ul class="nav navbar-nav" id="menu">
                            <br>

                            <a href="{{url('')}}">
                                <li class="menul" id="m2"> Vegetarian Option</li><br></a>
                            <a href="{{url('res_nonveg')}}">
                                <li class="menul" id="m3">Nonvegetarian Option</li> <br></a>
                            <a href="{{url('res_desert')}}">
                                <li class="menul" id="m4">Dessert Food</li><br></a>
                            <a href="{{url('res_fast')}}">
                                <li class="menul" id="m6">Fast Food</li>
                            </a>



                        </ul>

                    </nav>

                </div>
            </div>


            <div class="col-md-9">
                <div class="row">
                    <div class="nn">
                        @yield('content')
                    </div>


                </div>
            </div>
        </div>


        <div class="row" style="background-color: black;" id="last">
            <div class="col-md-12">
                <div class="foot">
                    <div class="ff">
                        <p class="f">About</p>
                        <p class="f">Contact</p>
                        <!-- <p  class="f">Add Restaurant</p> -->
                        <a href="{{url('/rsignup')}}" class="f">Add Restaurant</a>
                        <p class="f">Help</p>
                        <table id="ft">
                            <tr>
                                <td> <img src="{{asset('images/footphoto/glogo (2).png')}}" alt="" id="imgfg"></td>
                                <td> <img src="{{asset('images/footphoto/alogo.png')}}" alt="" id="imga"></td>
                            </tr>
                        </table>


                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>