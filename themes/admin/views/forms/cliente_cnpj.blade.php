<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <label for="nome">Nome:</label>
        <input type="text" name="empresa" id="" class="form-control"placeholder="Ex:. Grupo Nobre">
    </div>
</div>
<div class="row mt-2">
    <div class="col-12 col-sm-12 col-lg-12">
        <label for="cnpj">Cnpj:</label>
        <input type="text" name="empresa" id="txtCnpj" onkeyup="mask_cnpj();" maxlength="20" class="form-control" placeholder="Ex:. 06.141.256/3652-14">
    </div>
</div>
<div class="row mt-2">
    <div class="col">
        <button type="submit" class="btn btn-primary">Gravar</button>
        <button type="reset" class="btn btn-dark">Refazer</button>
    </div>
</div>