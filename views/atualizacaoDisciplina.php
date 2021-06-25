<div class="container mt-5">
    <form action="<?=BASE_URL?>disciplina/atualizar/<?=$disciplina['Id']?>" class="was-validated">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome" value="<?=$disciplina['Nome']?>" required>
            <div class="valid-feedback">Valido.</div>
            <div class="invalid-feedback">Por favor digite um valor valido.</div>
        </div>
        <div class="form-group">
        <label for="sel1">Select list:</label>
            <select class="form-control" id="professor">
            <?php
            if(count($professores) > 0):
                foreach ($professores as $professor):
            ?>
                <option value="<?=$professor['Id']?>" <?php ($professor['Id'] == $disciplina['Professor'])? 'selected':'' ;?>><?=$professor['Nome']?></option>
            <?php
                endforeach;
            endif;
            ?>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>