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

                <h5 class="card-title">Gestão de Musicas</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Lista das Musicas</h6>

            </div>

        </div>

        <a href="{{ route ('musicas.create') }}" class = "btn btn-sm btn-primary"> Criar </a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Musicas</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Duração</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($musicas as $musica)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>

                        <th>{{$musica->id}}</th>

                        <td> {{$musica->musica}} </td>

                        <td>

                            
                            <div class = "d-flex flex-row ">
                                
                                <a href="{{route('musicas.edit',$musica->id)}}" class = "btn btn-sm btn-warning">Edit</a>

                                <!-- É necessário trasnformar este botão em num form porque em Laravel ele está à espera de um método POST
                                e com um link normal estamos a usar GET.   -->
                                <form action="{{route('musicas.destroy',$musica->id)}}" method="post">
                                    @csrf
                                    @method('delete')

                                    <button type = "submit" class = "btn btn-sm btn-danger ms-2 ">Delete</button>

                                </form>

                            </div>

                        </td>
                    </tr>
                @empty

                    <tr>

                        <td colsplan = "4">Ainda sem categorias</td>
                        
                    </tr>

                @endforelse
                
        </table>

    </div>
</body>
</html>