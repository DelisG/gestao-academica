<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $data_nasc = $_POST["data_nasc"];
        $cpf = $_POST["cpf"];

        $sql = "INSERT INTO alunos (nome, data_nasc, cpf) VALUES ('{$nome}', '{$data_nasc}', '{$cpf}')";

        $res = $conn->query($sql);
        if ($res == true) {
            print "<script>alert('Cadastrado com Sucesso')</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar')</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
    case 'editar':
        $nome = $_POST["nome"];
        $data_nasc = $_POST["data_nasc"];
        $cpf = $_POST["cpf"];

        $sql = "UPDATE alunos SET
                        nome='{$nome}',
                        data_nasc='{$data_nasc}',
                        cpf='{$cpf}',
                WHERE 
                        id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Modificado com Sucesso')</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível modificar')</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
    case 'excluir':
        $sql = "DELETE FROM alunos WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Excluido com Sucesso')</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível Excluir')</script>";
            print "<script>location.href='?page=listar';</script>";
        }

        break;
    default;
};
