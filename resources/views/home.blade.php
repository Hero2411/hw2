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

    <header>
        <div id="introduction">
            <p><span id="random_quote">AlterPhotograpy</span></p>
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
        <p>Web programming refers to the creation
            of websites and web applications using
            various programming languages. Below
            are some of the commonly used programming
            languages in web development:</p>
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
        <p>Web programming refers to the creation
            of websites and web applications using
            various programming languages. Below
            are some of the commonly used programming
            languages in web development:</p>
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
