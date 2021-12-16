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
                            <a href="#" class="btn btn-danger" title="Remover cadastro" data-toggle="modal" data-target="#e_{{$empresa->id}}"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="e_{{$empresa->id}}" tabindex="-1" aria-labelledby="e_{{$empresa->id}}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="e_{{$empresa->id}}Label">{{$empresa->empresa}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                        <div class="row">
                                            <div class="col">
                                                <h4>Deseja realmente excluir esse cadastro?</h4>
                                            </div>
                                        </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">&nbsp;Não, Cancelar</button>
                                    <a href="{{ route('admin.empresa.del',$empresa->id) }}" class="btn btn-danger" title="Excluir">&nbsp;Sim, Excluir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>