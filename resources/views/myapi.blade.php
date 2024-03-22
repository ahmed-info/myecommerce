<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">user id</th>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">body</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($response as $respon)
            <tr>
                <th>{{ $respon->userId}}</th>
                <th>{{ $respon->id}}</th>
                <th>{{ $respon->title}}</th>
                <th>{{ $respon->body}}</th>

            </tr>
            @endforeach


        </tbody>
    </table>
</body>

</html>