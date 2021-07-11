<!DOCTYPE html>
<html>
<head>
    <title>Welcome TO FSS</title>

    <style type="text/css">
        button{
            width: 280px;
            height: 55px;
            background-color: green;
            border: 1px green;  
            color: white;
            font-size: 20px;
        }
    </style>
</head>
<body>

<center>
    <h1  style="margin-bottom: 10%">Welcome To File Sharing System</h1>
    <div>
        <a href="{{url('login')}}"><button>Login</button></a>

         <a href="{{url('register')}}"><button>Register</button></a>
    </div>
</center>

</body>
</html>