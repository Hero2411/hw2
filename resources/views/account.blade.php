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

    @php
    $user = App\Http\Controllers\UserControl::getUserInfo(auth()->user()->name);
    $info = App\Http\Controllers\PhotoController::getAccountFavourites(auth()->user()->id);
    @endphp

    <div id = "accountdiv">
    <h1>Welcome {{$user->name}}</h1>

    <div class="grid">
        @foreach ($info as $photo)
            <img src="/assets/img/photos/{{$photo->filename}}" alt="Photo {{$photo->photo_id}}">
        @endforeach
    </div>

    </div>




    @include('footer')
    <script src="./assets/js/utils.js"></script>
</body>

</html>
