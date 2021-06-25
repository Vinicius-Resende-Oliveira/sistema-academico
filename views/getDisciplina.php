<div class="container">
    <div class="jumbotron mt-5">
        <h1><?=$disciplina['Id']?> - <?=$disciplina['Nome']?>(<?=$disciplina['Alunos']?>)</h1>
        <p> <a href="<?=BASE_URL?>professor/show/<?=$disciplina['pId']?>"> <?=$disciplina['pNome']?></a></p>
    </div> 
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>disciplina/estudantes/<?=$disciplina['Id']?>"> Adicionar Alunos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>disciplina/atualizacao/<?=$disciplina['Id']?>">Editar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=BASE_URL?>disciplina/excluir/<?=$disciplina['Id']?>">Excluir</a>
            </li>
        </ul>
    </nav>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
<?php
if(count($alunos) > 0):
    foreach ($alunos as $aluno):
?>
        <tr>
            <td><?=$aluno['Id']?></td>
            <td><?=$aluno['Nome']?></td>
            <td><?=$aluno['data_nasc']?></td>
            <td><a href="<?=BASE_URL?>disciplina/excluirAluno/<?=$disciplina['Id']?>?estudante=<?=$aluno['Id']?>" class="btn btn-danger">Retirar</a></td>
        </tr>
<?php
    endforeach;
endif;
?>
    </tbody>
  </table>
</div>