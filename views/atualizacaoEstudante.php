<div class="container mt-5">
    <form action="<?=BASE_URL?>estudante/atualizar/<?=$estudante['Id']?>" class="was-validated">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome" value="<?=$estudante['Nome']?>"required>
            <div class="valid-feedback">Valido.</div>
            <div class="invalid-feedback">Por favor digite um valor valido.</div>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" placeholder="Digito o CPF" name="cpf" value="<?=$estudante['cpf']?>" required>
            <div class="valid-feedback">Válido.</div>
            <div class="invalid-feedback">Por favor digite um valor válido.</div>
        </div>
        <div class="form-group">
            <label for="data_nasc">Data de Nascimento:</label>
            <input type="date" class="form-control" id="data_nasc" placeholder="Seleciona a data de nascimento" name="data_nasc" value="<?=$estudante['data_nasc']?>" required>
            <div class="valid-feedback">Válido.</div>
            <div class="invalid-feedback">Por favor digite um valor válido.</div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>