<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
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
    <link rel="stylesheet" href="{{ asset('/css/reitem.css') }}">
</head>
<body>
    <div class="container-fluid">
    <div class="row">
    
        <div class="col-md-12" id="md">

    <form action="{{url('addfood')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <h1>Add Your Food Items</h1>
                        <br>
                        <br>
                        <label for="">CATEGORY</label>
                        <select id="" name="cat">
                        <option value="Vegetarian">Vegetarian</option>
                        <option value="Nonvegetarian">Nonvegetarian</option>
                        <option value="DessertFood">DessertFood</option>
                        <!-- <option value="Pizza">Pizza</option> -->
                        <option value="FastFood">FastFood</option>
                        </select>
                        <br>
                        <label>DISH NAME:</label>
                        <input type="text" class="form-control"  placeholder=" "  name="dname" style="width: 240px;">
                        <label>ABOUT DISH:</label>
                        <textarea class="form-control" id="" cols="4" rows="4" placeholder=" " style="width: 240px;" name="aboutd"></textarea>
                        <br>
                        <label for="">PRICE:</label>
                        <input type="text" class="form-control" id="" placeholder=" "  name="dprice" style="width: 240px;">
                       <br>
                       
                                   <label for="myfile"> FOOD IMAGE:</label>
                                        <input type="file" id="myfile" name="image" multiple>
                                    

                           
                  <br>
                  <br>

                      <button type="submit" class="btn btn-default" id="btn">Add Item</button>
                    </form>
     </div>
     </div>
     </div>
</body>
</html>