<h1>Nova Disciplina</h1>
<form action="/disciplinas" method="POST">
    @csrf
    <label>Nome da Disciplina:</label>
    <input type="text" name="name">
    <button type="submit">Salvar</button>
</form>
