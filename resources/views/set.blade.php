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


    <form id="ricerca">
        <input type="text" id="searchInput" name="searchInput">
        <button type="submit" id="search_button">Cerca</button>
      </form>
      
    @if (auth()->check() && auth()->user()->name == 'Admin')
        <a href="/adminpost">Add new Set</a>
    @endif


    <div id="containerset">
        @php
            $sets = App\Http\Controllers\PhotoController::getSets();
        @endphp
        
        @foreach ($sets as $set)
            <div class="card">
                <a href="./setpage/{{ $set->id }}">
                    <img src="./assets/img/covers/{{ $set->cover_filename }}">
                    <div id="cardtext">
                        <h3>{{ $set->title }}</h3>
                        <p>{{ $set->description }}</p>
                    </div>
                </a>
            </div>
        @endforeach

    </div>


    @include('footer')
    <script src="./assets/js/utils.js"></script>
    <script src="./assets/js/setpage.js"></script>
</body>

</html>
