<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Cursos</title>
</head>
<body>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{ $curso }}</li>
        @endforeach
    </ul>
</body>
</html>
