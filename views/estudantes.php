<div class="container">
    <div class="jumbotron mt-5">
        <h1 class="text-center">Estudantes</h1>
    </div>      
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
<?php
if(count($estudantes) > 0):
    foreach ($estudantes as $estudante):
?>
        <tr>
            <td><?=$estudante['Id']?></td>
            <td><?=$estudante['Nome']?></td>
            <td><?=$estudante['cpf']?></td>
            <td><?=$estudante['data_nasc']?></td>
            <td>
                <!-- <a href="<?=BASE_URL?>estudante/excluir/<?=$estudante['Id']?>" class="btn btn-danger">Retirar</a> -->
                <a href="<?=BASE_URL?>estudante/show/<?=$estudante['Id']?>" class="btn btn-primary">Visualizar</a> 
            </td>
        </tr>
<?php
    endforeach;
endif;
?>
    </tbody>
  </table>
</div>