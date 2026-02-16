<h1>Cadastro de Novo Curso</h1>

<form action="/cursos" method="POST">
    @csrf

    <label>Nome do Curso:</label>
    <input type="text" name="nome">

    <label>Carga Horária:</label>
    <input type="number" name="carga_horaria">

    <button type="submit">Salvar Curso</button>
</form>
