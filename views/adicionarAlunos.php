<div class="container">
    <div class="jumbotron mt-5">
        <h1><?=$disciplina['Id']?> - <?=$disciplina['Nome']?>(<?=$disciplina['Alunos']?>)</h1>
        <p> <a href="<?=BASE_URL?>professor/get/<?=$disciplina['pId']?>"> <?=$disciplina['pNome']?></a></p>
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
$matriculados = array();
if(count($alunos) > 0):
    foreach ($alunos as $aluno):
        $matriculados[] = $aluno['Id'];
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
<?php
if(count($estudantes) > 0):
    foreach ($estudantes as $estudante):
        if(!in_array($estudante['Id'], $matriculados)){
            ?>
        <tr>
            <td><?=$estudante['Id']?></td>
            <td><?=$estudante['Nome']?></td>
            <td><?=$estudante['data_nasc']?></td>
            <td><a href="<?=BASE_URL?>disciplina/addAluno/<?=$disciplina['Id']?>?estudante=<?=$estudante['Id']?>" class="btn btn-primary">Adicionar</a></td>
        </tr>
<?php
        }
    endforeach;
endif;
?>
    </tbody>
  </table>
</div>