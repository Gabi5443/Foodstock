<h1>Listar Produtos</h1>
<?php
    $sql = "SELECT * FROM produtos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        while($row = $res->fetch_object()){
            print $row->id;
            print $row->nome;
            print $row->descricao;
            print $row->data_validade;
            print $row->quantidade_estoque;
            print $row->criado_em;
        }

    }else{
        print "<p class='alert alert-dagner'>Não encontrou resultados!</p>";
    }
?>