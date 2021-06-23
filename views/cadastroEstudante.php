<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Estudantes</title>
</head>
<body>
    <form action="<?=BASE_URL?>estudante/cadastrar" method="get">
        <label>Nome:</label>
        <input type="text" name="nome" id="nome">
        <label>CPF:</label>
        <input type="text" name="cpf" id="cpf">
        <label>Data Nascimento:</label>
        <input type="date" name="data_nasc" id="data_nasc">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>