<div class="container">
    <div class="jumbotron mt-5">
        <h1><?=$professor['Id']?> - <?=$professor['Nome']?></h1>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="<?=BASE_URL?>professor/atualizacao/<?=$professor['Id']?>">Editar</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?=BASE_URL?>professor/excluir/<?=$professor['Id']?>">Excluir</a>
            </li>
        </ul>
    </nav>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Disciplina</th>
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
            <td><?=$disciplina['Alunos']?></td>
            <td>
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