<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">

        <form action="/posts" method="POST">

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea name="body" class="form-control" id="body"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Create Post</button>
            </div>

        </form>

</div>
</body>
</html>
