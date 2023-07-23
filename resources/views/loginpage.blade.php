<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>AlterPhotograpy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    @include('header')

    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                alert("{{ $error }}");
            @endforeach
        @endif
    </script>


    <div class="titoli">
        <h1>Benvenuto su AlterPhotograpy</h1>
        <p>Compila i form sotto per registrarti se sei un nuovo utente o loggare se sei già registarto!</p>
    </div>


    <div id="logsection">
        <div id="registration">
            <form action="/register" method="POST">
                @csrf
                <h1>Register</h1>
                <input type="text" name="name" placeholder="name"><br>
                <input type="text" name="email" placeholder="email"><br>
                <input type="password" name="password" placeholder="password"><br>
                <input type="password" placeholder="Confirm Password" name="password_confirmation" required><br>
                <span><button>Register</button></span>

            </form>
        </div>
        <div id="login">
            <form action="/login" method="POST">
                @csrf
                <h1>Login</h1>
                <input type="text" name="logname" placeholder="logname">
                <input type="password" name="logpassword" placeholder="logpassword">
                <span><button>Login</button></span>
            </form>
        </div>
    </div>


    @include('footer')
    <script src="./assets/js/utils.js"></script>

</body>

</html>
