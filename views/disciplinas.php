<div class="container">
    <div class="jumbotron mt-5">
        <h1 class="text-center">Disciplinas</h1>
    </div>      
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Professor</th>
            <th>Nº Alunos</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
<?php
if(count($disciplinas) > 0):
    foreach ($disciplinas as $disciplina):
?>
        <tr>
            <td><?=$disciplina['Id']?></td>
            <td><?=$disciplina['Nome']?></td>
            <td><?=$disciplina['pNome']?></td>
            <td><?=$disciplina['Alunos']?></td>
            <td>
                <a href="<?=BASE_URL?>disciplina/excluir/<?=$disciplina['Id']?>" class="btn btn-danger">Retirar</a>
                <a href="<?=BASE_URL?>disciplina/show/<?=$disciplina['Id']?>" class="btn btn-primary">Visualizar</a> 
            </td>
        </tr>
<?php
    endforeach;
endif;
?>
    </tbody>
  </table>
</div>