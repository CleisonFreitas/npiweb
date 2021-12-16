<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <label for="empresa">Nome:</label>
        <input type="text" name="empresa"  value="{{ $cliente->empresa ?? old('empresa') }}" id="" class="form-control"placeholder="Ex:. Grupo Nobre">
        @error('empresa')
            <small class="text-danger">*{{$message}}*</small>
        @enderror
    </div>
</div>
<div class="row mt-2">
    <div class="col-12 col-sm-12 col-lg-12">
        <label for="cnpj">Cnpj:</label>
        <input type="text" name="cnpj" value="{{ $cliente->cnpj ?? old('cnpj') }}" pattern="[0-9]{14}]"  maxlength="14" class="form-control" placeholder="Somente números">
        @error('cnpj')
            <small class="text-danger">*{{$message}}*</small>
        @enderror
    </div>
</div>
<div class="row mt-2">
    <div class="col">
        <button type="submit" class="btn btn-primary">Gravar</button>
        <a href="{{ route('admin.empresa')}}" class="btn btn-dark">Novo</a>
    </div>
</div>