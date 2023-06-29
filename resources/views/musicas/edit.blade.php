<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyApp Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <div class="card mb-5">

            <div class="card-body">

                <h2 class="card-title">Edição de Músicas!</h2>
                <h6 class="card-subtitle mb-2 text-body-secondary">Edite as suas Músicas.</h6>

            </div>

            <form action = "{{route('musicas.update',$musica->id)}}" method = "post">

                @csrf

                @method('put')

                <div>
                    <label for = "musica" class = "form-label">Nome da Música</label>
                    <input type = "text" class = "form-control" id = "musica" name = "musica" value="{{old('musica')}}">

                    @error('musica')

                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                        
                        
                    @enderror

                    <label for = "autor" class = "form-label">Nome do Autor</label>
                    <input type = "text" class = "form-control" id = "autor" name = "autor" value="{{old('autor')}}">
                    @error('autor')

                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>

                    @enderror

                    <label for = "duracao" class = "form-label">Duração da Música</label>
                    <input type = "text" class = "form-control" id = "duracao" name = "duracao" value="{{old('duracao')}}">
                    @error('autor')

                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>

                    @enderror

                </div>

                <button type = "submit" class = "btn btn-primary">Editar</button>

            </form>

        </div>

    </div>
</body>
</html>