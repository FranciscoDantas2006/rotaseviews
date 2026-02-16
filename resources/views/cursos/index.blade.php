<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Cursos</title>
</head>
<body>
    <h1>Cursos Cadastrados</h1>

    @if(count($cursos) > 0)
        <ul>
            @foreach ($cursos as $c)
                <li>{{ $c->nome }}</li>
            @endforeach
        </ul>
    @else
        <p>Ainda não há cursos na lista.</p>
    @endif

    <hr>
    <a href="/cursos/novo">Cadastrar Novo Curso</a>
</body>
</html>
