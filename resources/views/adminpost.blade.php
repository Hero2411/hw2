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
   
    <div id = "AddSet">
   
    <form method="POST" action="/set/add">
        @csrf
        
        <input type="text" placeholder = "Title" name="title" id="title" required>
    
        <input type="text" placeholder="Cover Filename" name="cover_filename" id="cover_filename" required>
        
        <input type="text" placeholder="Location" name="location" id="location" required>
    
        <input type="date" placeholder="Shoot Date" name="shoot_date" id="shoot_date" required>
    
        <input type="text" placeholder="Subject" name="subject" id="subject" required>
    
        <input type="text" placeholder="Description" name="description" id="description" required>
    </br>
    
        <button type="submit">Add Set</button>
    </form>
    </div>
    


    @include('footer')
    <script src="./assets/js/utils.js"></script>
</body>

</html>
