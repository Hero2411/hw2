<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>

<body>


    @include('header')

    <header>
        <div id="introduction">
            <h2 id="random_quote"></h2>
        </div>


    </header>

    <div id="socialbutton">
        <a href="https://www.instagram.com/alter.photography_" target="_blank">
            <img src="./assets/img/insta.png" alt="Insta link">
        </a>
        <a href="https://t.me/alterphotography" target="_blank">
            <img src="./assets/img/tele.png" alt="Telegram link">
        </a>
    </div>

    <div class="titoli">
        <h1>Latest Set</h1>
        <p>Qui trovi gli ultimi set scattati in ordine cronologico:</p>
    </div>


    <div id="cardbody">
        @php
            $sets = App\Http\Controllers\PhotoController::getSets()
                ->sortByDesc('shoot_date')
                ->take(3);
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

    <div class="titoli">
        <h1> Sezione foto random 16:9 </h1>
        <p>Qui trovi una selezione casuale delle mie foto:</p>
    </div>

    <section class="grid">
        @php
            $images = App\Http\Controllers\PhotoController::getRandomPhotos(9);
        @endphp
        @foreach ($images as $image)
            <img src="/assets/img/photos/{{ $image->filename }}" alt="{{ $image->alt_text }}"
                data-id="{{ $image->id }}">
        @endforeach
    </section>



    @include('footer')

    <script src="./assets/js/utils.js"></script>
    <script src="./assets/js/hw2.js"></script>





</body>

</html>
