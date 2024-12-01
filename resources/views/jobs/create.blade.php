<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new Job</title>
</head>
<body>
    <h1>Create new Job</h1>
    <form action="/jobs" method="post">
        @csrf
        <input type="text" name="title" id="title" placeholder="title">
        <input type="text" name="description" id="description" placeholder="description">
        <button type="submit">Submit</button>
    </form>
</body>
</html>