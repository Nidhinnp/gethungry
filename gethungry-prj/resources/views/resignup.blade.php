<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="{{asset('/css/rsignup.css')}}">

</head>
<body>
    <div class="container-fluid">
      
        <div class="row">
            <div class="col-md-12">
              
              
                <div class="col-md-8 main">
                    <div class="sacond">
                        <h1>Add a Restaurant</h1>
                        <br>
                        <br>
                        <form action="{{url('rurl')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <label>RESTAURANT NAME:</label>
                        <input type="text" class="form-control"  placeholder="Enter Restaurant Name: "  name="rname">
                        <label>ADDRESS </label>
                        <textarea class="form-control" name="address" id="" cols="4" rows="4" placeholder="Enter Restaurant Address " style="width: 240px;" ></textarea>
                        <br>
                        <label for="">NAME OF OWNER OR MANAGER:</label>
                        <input type="text" class="form-control" id="" placeholder="Enter Name: "  name="oname" style="width: 240px;">
                       <br>
                       <table>
                           <tr>
                               <td>
                                <label for="">EMAIL:</label>
                                <input type="email" class="form-control" id="" placeholder="Enter Email "  name="email" style="width: 240px;">
                               </td>
                               <td>
                                <label for="">STD:</label>
                                <input type="number" class="form-control" id="" placeholder="Enter Phone Number "  name="land" style="width: 240px;">
                               </td>
                               <td>
                                <label for="">MOBILE PHONE:</label>
                                <input type="number" class="form-control" id="" placeholder="Enter Mobile Number"  name="mob" style="width: 240px;">
                               </td>
                               <tr>
                                   <td>
                                    <label for="">ENTER PASSWORD:</label>
                                <input type="password" class="form-control" id="" placeholder="Enter Password"  name="pass" style="width: 240px;">
                                   </td>
                                   <td>
                                    <label for="">RE-ENTER PASSWORD</label>
                                    <input type="password" class="form-control" id="" placeholder="Conform Password"  name="" style="width: 240px;">
                                   </td>
                                   <td><label for="myfile">Restaurant licence:</label>
                                        <input type="file" id="myfile" name="image" multiple>
                                            </td>
                               </tr>
                           </tr>
                       </table>

                      <button type="submit" class="btn btn-default" id="btn">Add Restaurant</button>
                    </form>
                  </div>
                  
                </div>
                
            </div>

        </div>


    </div>
</body>
</html>