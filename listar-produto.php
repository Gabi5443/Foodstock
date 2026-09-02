<h1>Listar Produtos</h1>
<?php
    $sql = "SELECT * FROM produtos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Descrição</th>";
            print "<th>Data de Validade</th>";
            print "<th>Quantidade no Estoque</th>";
            print "<th>Data de Criação</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>".$row->data_validade."</td>";
            print "<td>".$row->quantidade_estoque."</td>";
            print "<td>".$row->criado_em."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button class='btn btn-danger'>Excluir</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-dagner'>Não encontrou resultados!</p>";
    }
?>