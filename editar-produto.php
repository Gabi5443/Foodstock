<h1>Editar Produto</h1>
<?php
    $sql = "SELECT * FROM produtos WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>ID do produto</label>
        <input type="number" name="id" class="form-control">
    </div>
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Validade</label>
        <input type="date" name="data_validade" class="form-control">
    </div>
    <div class="mb-3">
        <label>Quantidade em Estoque</label>
        <input type="number" name="quantidade_estoque" class="form-control">
    </div>
    <div class="mb-3">
        <label>Criado em</label>
        <input type="datetime-local" name="criado_em" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>