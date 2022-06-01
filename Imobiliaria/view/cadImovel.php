<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Imovel</title>
</head>
<body>
    <form name="cadImovel" id="cadImovel" action="" method="post">
        Tipo:<select name="tipo" id="tipo">
            <option value="0"></option>
            <option value="A">Apartamento</option>
            <option value="B">Kitnet</option>
            <option value="C">Flat</option>
            </select><br/>
        Preço: <input type="text" name="preco" id="preco"><br/>
        Descricao: <input type="text" name="descricao" id="descricao"><br/>
        <input type="submit" name="bntSalvar" id="bntSalvar">
    </form>
</body>
<?php
    if(isset($_POST['bntSalvar'])){

        require_once '../controller/ImovelController.php';

        call_user_func(array('ImovelController','salvar'));
    }
?>
</html>