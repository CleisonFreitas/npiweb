<div class="card mt-3 shadow">
    <div class="card-header">
        <h4>Lista de Clientes/Empresa</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" cellspacing="0" width="100%" id="dataTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Empresa</th>
                        <th>CNPJ</th>
                        <th>Editar/Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empresa as $empresa)
                    <tr>
                        <td>{{$empresa->id}}</td>
                        <td>{{$empresa->empresa}}</td>
                        <td>{{$empresa->cnpj}}</td>
                        <td>
                            <a href="{{ route('admin.empresa.edit',$empresa->id) }}" class="btn btn-secondary" title="Editar Cliente"><i class="fas fa-pencil-alt"></i></a>
                            <a href="{{ route('admin.empresa.del',$empresa->id) }}" class="btn btn-danger" title="Remover cadastro"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>