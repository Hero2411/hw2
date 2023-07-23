<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>AlterPhotograpy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    @include('header')

    @php
        $images = App\Http\Controllers\PhotoController::showPhotosBySetId($set_id);
        $setinfo = App\Http\Controllers\PhotoController::getSetbyId($set_id);
    @endphp

    <div id="titleimg">

        <img src = "/assets/img/covers/{{$setinfo->cover_filename}}">

        <div id="setpageintrotext">
            <h1>{{$setinfo->title}}</h1>
            <p>{{$setinfo->description}}</p>
            <p>{{$setinfo->location}}</p>
            <p>{{$setinfo->shoot_date}}</p>
            <p>{{$setinfo->subject}}</p>
        </div>
    </div>

    <section class="grid">
        @foreach ($images as $image)
            <img src="/assets/img/photos/{{ $image->filename }}" alt="{{ $image->alt_text }}" data-id="{{ $image->id }}" >
        @endforeach
    </section>


    @auth
    
    <div id="commentsection">
    <div class="comments-container" id="comments">
    </div>


    <div id="interactions">
        <button id="like-button">Like</button><br>
        <input name = "comment_text" placeholder="comment" id="comment_input">
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        <input type="hidden" name="img" id="img_id">
        <button id="capy_btn">Comment</button>
    </div>
    @endauth

    @include('footer')
    <script src="/assets/js/utils.js"></script>
    <script src="/assets/js/setsingolo.js"></script>
</body>

</html>
