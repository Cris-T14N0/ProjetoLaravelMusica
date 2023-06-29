<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="card mb-5">

        <div class="card-body">

            <h3 class="card-title">Welcome!</h3>
            <h5 class="card-subtitle mb-2 text-body-secondary">Deseja ver a lista de musicas guardadas numa base de dados que eu criei?</h5>

            <a href="{{ route('musicas.index')}}" class = "btn btn-success">Sim</a>
        </div>
    </div>
</body>
</html>