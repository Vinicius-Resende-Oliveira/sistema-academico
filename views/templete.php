<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
    <title>Sistema Acadêmico</title>
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Sistema Acadêmico</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>professor/">Professores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>estudante/">Estudantes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>disciplina">Disciplinas</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Cadastrar
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?=BASE_URL?>professor/cadastro">Professores</a>
                <a class="dropdown-item" href="<?=BASE_URL?>estudante/cadastro">Estudantes</a>
                <a class="dropdown-item" href="<?=BASE_URL?>disciplina/cadastro">Disciplinas</a>
            </div>
            </li>
            
        </ul>
    </nav>
    <?php $this->loadViewInTemplete($viewName, $viewData);?>
    <script src="<?=BASE_URL?>assets/js/jquery.js"></script>
    <script src="<?=BASE_URL?>assets/js/bootstrap.min.js"></script>
</body>
</html>