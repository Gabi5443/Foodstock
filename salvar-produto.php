<?php 
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $id = $_POST["id"];
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $data_validade = $_POST["data_validade"];
            $quantidade_estoque = $_POST["quantidade_estoque"];
            $criado_em = $_POST["criado_em"];

            $sql = "INSERT INTO produtos (id, nome, descricao, data_validade, quantidade_estoque, criado_em) VALUES ('{$id}', '{$nome}', '{$descricao}', '{$data_validade}', '{$quantidade_estoque}', '{$criado_em}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não for possível cadastrar ):');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        
        case 'editar':

            break;
        
        case 'excluir':

            break;
    }