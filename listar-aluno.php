    <h1>Listar Alunos</h1>
    <?php
    $sql = "SELECT * FROM alunos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID<th>";
        print "<th>Nome<th>";
        print "<th>Data De Nascimento<th>";
        print "<th>CPF<th>";
        print "<th>Ações<th>";
        print "<tr>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id . "<td>";
            print "<td>" . $row->nome . "<td>";
            print "<td>" . $row->data_nasc . "<td>";
            print "<td>" . $row->cpf . "<td>";
            print "<td><button class='btn btn-secondary' onclick=\"location.href='page=editar&id=" . $row->id . "';\">Editar</button>
             <button class='btn btn-secondary' onClick=\"if(confirm('Confirma a Exclusão permanente ?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\">Excluir</button><td>";
            print "<tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou Usuários</p>";
    }
    ?>