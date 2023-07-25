<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>AlterPhotograpy</title>
</head>

<body>

    @include('header')

    <div class="titoli">
        <h1>Benvenuto su AlterPhotograpy</h1>
        <p>Compila i form sotto per registrarti se sei un nuovo utente o loggare se sei già registarto!</p>
    </div>

    <p id = "avviso">
        
    </p>


    <div id="logsection">
        <div id="registration">
            <form action="/register" method="POST">
                @csrf
                <h1>Register</h1>
                <input type="text" name="name" placeholder="name">
                <input type="text" name="email" placeholder="email">
                <input type="password" name="password" placeholder="password">
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

    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                alert("{{ $error }}");
            @endforeach
        @endif
    </script>

    @include('footer')
    <script src="./assets/js/utils.js"></script>
    <script src="./assets/js/log.js"></script>

</body>

</html>
