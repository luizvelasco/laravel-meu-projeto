<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>
<body>
    <a href="{{ route('course.show')}}">Visualizar</a><br>
    <a href="{{ route('course.create')}}">Cadastrar</a><br>
    <a href="{{ route('course.edit')}}">Editar</a><br>
    
    <h2>Listar os Cursos</h2>

    

    @forelse ($courses as $course)
        {{ $course->name}} <br>
        {{ \Carbon\Carbon::parse($course->created_at) -> tz('America/Sao_Paulo') -> format('d/m/Y H:i:s')}} <br>
        {{ \Carbon\Carbon::parse($course->updated_at) -> tz('America/Sao_Paulo') -> format('d/m/Y H:i:s')}} <br><hr>
    @empty 
        <p style="color: red">Nenhum curso encontrado!</p>
    @endforelse

    {{$courses->links()}}
</body>
</html>