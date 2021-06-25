<div class="container">
    <div class="jumbotron mt-5">
        <h1 class="text-center">Professores</h1>
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
if(count($professores) > 0):
    foreach ($professores as $professor):
?>
        <tr>
            <td><?=$professor['Id']?></td>
            <td><?=$professor['Nome']?></td>
            <td><?=$professor['CPF']?></td>
            <td><?=$professor['data_nasc']?></td>
            <td>
                <a href="<?=BASE_URL?>professor/excluir/<?=$professor['Id']?>" class="btn btn-danger">Retirar</a>
                <!-- <a href="<?=BASE_URL?>disciplina/show/<?=$professor['Id']?>" class="btn btn-primary">Visualizar</a>  -->
            </td>
        </tr>
<?php
    endforeach;
endif;
?>
    </tbody>
  </table>
</div>