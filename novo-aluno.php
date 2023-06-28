    <h1>Novo Aluno</h1>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Aluno</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="mb-3">
            <label>Data de Nascimento</label>
            <input type="date" name="data_nasc" class="form-control">
        </div>
        <div class="mb-3">
            <label>CPF</label>
            <input type="text" name="cpf" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-secondary">Enviar</button>
        </div>
    </form>