<div class="row mt-2">
    <!-- Tópicos -->
    <div class="col-12 col-sm-12 col-lg-6 mt-1">
        <div class="card" style="height:100%">
            <div class="card-body">
                <!-- Accordion -->
                <div class="accordion" id="accordionExample">
                    <div class="card shadow">
                        @foreach ($select_content as $select)
                            @if ($select->tipo == "I")
                                <div class="card-header border-0 bg-white" id="E_{{$select->form_id}}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-outline-dark text-left" type="button" data-toggle="collapse" data-target="#E{{$select->etiqueta}}" aria-expanded="true" aria-controls="E{{$select->etiqueta}}" style="width:100%;">
                                            {{$select->etiqueta}} - {{$select->descricao}}
                                        </button>
                                    </h2>
                                </div>
                                @elseif($select->tipo == "C")
                                <div id="E{{$select->etiqueta}}" class="collapse" aria-labelledby="E_{{$select->form_id}}" data-parent="#accordionExample">
                                    <div class="card-body bg-white shadow">
                                        <button class="btn btn-light text-left" data-toggle="modal" data-target="#con{{$select->id}}" style="width:100%;">
                                            <i class="far fa-file-video"></i> - <b>{{$select->descricao}}</b>
                                        </button>                                        
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="con{{$select->id}}" tabindex="-1" aria-labelledby="#conLabel{{$select->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="#conLabel{{$select->id}}">{{$select->descricao}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="{{$select->iframe}}" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- #Modal -->
                            @endif
                        @endforeach     
                    </div>
                </div>
                <!-- #Accordion -->
            </div>
        </div>
    </div>
    <!-- #Tópicos -->
    <!-- #Conteúdo/Vídeo -->
    <div class="col-12 col-sm-12 col-lg-6 mt-1">
        <div class="card bg-white border-3" style="height:100%">
            <div class="card-body">
                {{$formacao->sobre}}
            </div>
        </div>
    </div>
    <!-- #Conteúdo/Vídeo -->
</div>

