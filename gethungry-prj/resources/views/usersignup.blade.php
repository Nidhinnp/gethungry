<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <link rel="stylesheet" href="{{asset('/css/usignup.css')}}">



</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

            </div>
            <div class="main">
                <h1>Sign up</h1>
                <form action="{{url('userurl')}}" method="POST" onsubmit="return validateform()">
                    {{csrf_field()}}
                    <ul>
                        <li><input type="text" placeholder="Enter Name" name="name" id="name"></li><span style="color: red;font-size: small; visibility: hidden;" id="mname">Name should be less than 6</span>
                        <li><input type="text" placeholder="Enter your email" name="email"></li>
                        <li><input type="text" placeholder="Enter your phone number" name="num"></li>
                        <li><input type="password" placeholder="Enter password " name="pass"></li>
                        <li><input type="password" placeholder="Enter conform  password"></li>
                    </ul>

                    <button type="submit" class="btn1">CONTINUE</button>
                </form>
            </div>

        </div>

    </div>


    </div>
    <script>
        function validateform() {
            var name = document.getElementById("name").value;
            var m_name = document.getElementById("mname");
            formvalid = true;

            if (name.length < 6) {
                m_name.style.visibilit = 'visible';
                formvalid = false;
            } else {
                m_name.style.visibilit = 'hidden';
            }
            if (formvalid == false) {
                return false;
            }
        }
    </script>
</body>

</html>