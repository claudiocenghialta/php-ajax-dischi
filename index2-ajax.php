


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js" integrity="sha512-zT3zHcFYbQwjHdKjCu6OMmETx8fJA9S7E6W7kBeFxultf75OPTYUJigEKX58qgyQMi1m1EgenfjMXlRZG8BXaw==" crossorigin="anonymous"></script>
    <title>Dischi</title>
</head>

<body>
    <header>
        <div class="container-header">
            <img src="https://i0.wp.com/azmagazine.co.uk/wp-content/uploads/2018/08/spotify-logo.png?resize=820%2C615" alt="logo" class="logo">
            <select class="select-author" name="">
                <option value="All">All</option>
            </select>
        </div>
    </header>
    <div class="container-dischi">




    </div>

    <!-- template cards dischi -->
    <script id="entry-template" type="text/x-handlebars-template">
        <div class="card-disco">
            <img class="poster" src="{{poster}}" alt="{{title}}">
            <div class="title">{{title}}</div>
            <div class="author">{{author}}</div>
            <div class="year">{{year}}</div>
        </div>
    </script>
    <!-- template select author -->
    <script id="select-template" type="text/x-handlebars-template">
        <option value="{{Author}}">{{Author}}</option>
    </script>

    <script src="dist/app.js" charset="utf-8"></script>

</body>

</html>
