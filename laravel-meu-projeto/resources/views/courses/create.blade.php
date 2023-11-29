<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>
<body>
    <a href="{{ route('course.index')}}">Listar</a><br>
    <a href="{{ route('course.show')}}">Visualizar</a><br>
    <a href="{{ route('course.edit')}}">Editar</a><br>

    <h2>Cadastrar Curso</h2>

    

    <form action="{{ route('course.store') }}" method="post">
        @csrf
        @method ('POST')
        <div>
            <label for="">Nome: </label>
        </div>
        <div>
            <input type="text" name="name" id="name" placeholder="Nome do curso" value="{{ old('name') }}" required>
        </div>
        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</body>
</html>