<div class="card mt-2 shadow">
    <div class="card-header">
        <h4>Lista de Clientes/Empresa</h4>
    </div>
    <div class="card-body">
        <table class="table table-hover" cellspacing="0" width="100%">
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>