    <h1>Editar Dados Dos Alunos</h1>
    <?php
    $sql = "SELECT * FROM alunos WHERE id=" . $_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">
        <div class="mb-3">
            <label>aluno</label>
            <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Data de Nascimento</label>
            <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Cpf</label>
            <input type="text" name="cpf" value="<?php print $row->cpf; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-secondary">Enviar</button>
        </div>
    </form>