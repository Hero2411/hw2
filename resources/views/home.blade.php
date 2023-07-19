<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body>

    @auth

        <h1>Sei registrato</h1>
        <form action="/logout" method="POST">
            @csrf
            <button>LogOut</button>

        </form>
    @else
        <div id="logsection">
            <div id="registration">
                <form action="/register" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="name"><br>
                    <input type="text" name="email" placeholder="email"><br>
                    <input type="password" name="password" placeholder="password"><br>
                    <span><button>Register</button></span>

                </form>
            </div>
            <div id="login">
                <form action="/login" method="POST">
                    @csrf
                    <input type="text" name="logname" placeholder="logname">
                    <input type="password" name="logpassword" placeholder="logpassword">
                    <span><button>Login</button></span>
                </form>
            </div>
        </div>

    @endauth





</body>

</html>
