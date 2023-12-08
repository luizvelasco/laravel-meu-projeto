<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke</title>
</head>
<body>
    <a href="{{ route('course.create')}}">Cadastrar</a><br>
    
    <h2>Listar os Cursos</h2>

    

    @forelse ($courses as $course)
        ID: {{ $course->id}} <br>
        Nome: {{ $course->name}} <br>
        Cadastrado: {{ \Carbon\Carbon::parse($course->created_at) -> tz('America/Sao_Paulo') -> format('d/m/Y H:i:s')}} <br>
        Editado: {{ \Carbon\Carbon::parse($course->updated_at) -> tz('America/Sao_Paulo') -> format('d/m/Y H:i:s')}} <br>
        <a href="{{ route('course.show', ['courseId' => $course->id])}}">Visualizar</a><br>
        <hr>
    @empty 
        <p style="color: red">Nenhum curso encontrado!</p>
    @endforelse

    {{$courses->links()}}
</body>
</html>