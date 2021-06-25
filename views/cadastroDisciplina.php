<div class="container mt-5">
    <form action="<?=BASE_URL?>disciplina/cadastrar" class="was-validated">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome" required>
            <div class="valid-feedback">Valido.</div>
            <div class="invalid-feedback">Por favor digite um valor valido.</div>
        </div>
        <div class="form-group">
        <label for="sel1">Selecine o professor:</label>
            <select class="form-control" name="professor">
            <?php
            if(count($professores) > 0):
                foreach ($professores as $professor):
            ?>
                <option value="<?=$professor['Id']?>"><?=$professor['Nome']?></option>
            <?php
                endforeach;
            endif;
            ?>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>