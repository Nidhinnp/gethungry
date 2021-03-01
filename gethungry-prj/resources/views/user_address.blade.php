@extends('userprofile')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="{{ asset('/css/useraddr.css') }}">
    <title>Document</title>
    <style>


    </style>
</head>
<body>
<div class="ad">                         

                        <h1>Add Your Address</h1>
            <form action="">
            
            <table>
            <tr>
                <td>
                    <label for="">Name</label>
                </td>
                <td>
                <input type="text" class="form-control"  placeholder=" "  name="dname" style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Contact Number</label>
                </td>
                <td>
                <input type="text" class="form-control"  placeholder=" "  name="dname" style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Pincode</label>
                </td>
                <td>
                <input type="text" class="form-control"  placeholder=" "  name="dname" style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Address</label>
                </td>
                <td>
                <input type="textarea" class="form-control"  placeholder=" "  name="dname" style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">City/District</label>
                </td>
                <td>
                <input type="text" class="form-control"  placeholder=" "  name="dname" style="width: 300px;">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">State</label>
                </td>
                <td>
                <input type="text" class="form-control"  placeholder=" "  name="dname" style="width: 300px;">
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="">Landmark</label>
                </td>
                <td>
                <input type="text" class="form-control"  placeholder=" "  name="dname" style="width: 300px;">
                </td>
            </tr>

            </table>   
            <br>
            <button type="submit" class="btn btn-default" id="btn">Save</button>
            <button type="submit" class="btn btn-default" id="btn2"><a href="">Edit</a></button>              


            </form>




                                    

                           
                  

                     
                      </div>    
</body>
</html>
@endsection