<div class="container">
    <div class="jumbotron mt-5">
        <h1><?=$disciplina['Id']?> - <?=$disciplina['Nome']?>(<?=$disciplina['Alunos']?>)</h1>
        <p> <a href="<?=BASE_URL?>professor/get/<?=$disciplina['pId']?>"> <?=$disciplina['pNome']?></a></p>
        <p><a href="<?=BASE_URL?>disciplina/estudantes/<?=$disciplina['Id']?>"> Adicionar Alunos</a></p>
    </div>      
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