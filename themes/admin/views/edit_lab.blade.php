@extends('admin.blank')

@section('title','Laboratório')

@section('admin','- Laboratório')

@section('content')

<!-- Conteúdo -->    
    <h1 class="h3 mb-4 text-gray-600">Laboratório</h1>


    <!-- Espelho para edição de formação -->
    @foreach($formacoes as $f)
        <div class="row">
            <div class="col-4 col-sm-3 col-lg-2">
                <input type="text" name="codigo" id="codigo" value="{{$f->id}}" class="form-control"  readonly>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-8 col-sm-8 col-lg-8" >
                <select class="custom-select" name="formacoes" id="laboratorio">
                    <option value="{{$f->id}}">{{$f->descricao}}</option>
                </select>
            </div>
            <div class="col-4 col-sm-3 col-lg-2">
                <a href="{{ route('admin.laboratorio') }}" class="btn btn-secondary" >
                    <i class="bi bi-arrow-return-left "></i>Voltar
                </a>
            </div> 
        </div>
        @endforeach
        <div class="row mt-2">
            <div class="col-12 col-lg-12">
                <h1 class="h3 mb-4 text-gray-600">Formulário de Construção</h1>
            </div>
            <div class="col-12 col-sm-12 col-lg-5 mb-4 mt-1">
                <!-- Formação -->
                <form action="{{ route('admin.updt_lab') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        @foreach ($formacoes as $f)
                            <input type="hidden" name="categoria" value="{{ $f->categoria }}" id="">
                            <input type="hidden" name="nivel" value="{{ $f->nivel }}" id="">
                            <input type="hidden" name="form_id" value="{{ $f->id }}" id="">
                            <input type="hidden" name="operador" value="{{ Auth::guard('admin')->user()->name }}" id="">
                        @endforeach
                        
                        <label for="indice" class="col-form-label">Tipo: &nbsp;</label>
                        <div class="col">
                            <select name="tipo" id="tipo" class="custom-select">
                                <option value="I">Índice</option>
                                <option value="C">Conteúdo</option>
                            </select>    
                        </div>    
                    </div>
                    <div class="form-group row">
                        <label for="titulo" class="col-form-label">Título: </label>
                        <div class="col">
                            <input type="text" name="descricao" id="" class="form-control" placeholder="Título">
                        </div>    
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-form-label" style="margin-right:25px;">ID:</label>
                        <div class="col">
                            <input type="text" name="cont_id" id="" class="form-control" placeholder="Código">
                        </div>
                        <div class="col">
                            <input type="text" name="ordem" id="" class="form-control" placeholder="Ordem">
                        </div>      
                    </div>   
                    <div class="form-group row">
                        <label for="ident" class="col-form-label">Marca:</i></label>
                        <div class="col">
                            <input type="text" name="etiqueta" id="" class="form-control" placeholder="Digite um código para etiqueta">
                        </div> 
                    </div> 
                    <div class="form-group row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-sm" >Enviar</button>
                            <button type="reset" class="btn btn-secondary btn-sm">Limpar</button>
                        </div>
                       
                    </div>
                </form>
                <!-- #Formação -->     
            </div>
            <!-- Conteudo -->
            <div class="col col-sm-12 col-lg-7 bg-light" >
                    <!-- Accordion -->
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                    <h5><i class="fas fa-video"></i>&nbsp;Conteúdo</h5>
                            </div>
                            @foreach($laboratorio as $lab)
                                @if($lab->tipo == "I")
                                <div class="card-header bg-gray-300 border-1" id="headon">
                                    <h2 class="mb-0">
                                        <a class="btn btn-primary" type="button" data-toggle="collapse" data-target="#e_{{$lab->etiqueta }}" aria-expanded="false" aria-controls="e_{{$lab->etiqueta }}" style="width:100%">
                                            {{  $lab->descricao }}
                                        </a>
                                    </h2>
                                </div>
                                @elseif($lab->tipo == "C")
                                    <div id="e_{{$lab->etiqueta }}" class="collapse" aria-labelledby="headon" data-parent="#accordionExample">
                                        <div class="card-body bg-gray-300">
                                            <hr class="sidebar-divider mt-0">
                                            <div class="row">
                                                <div class="col">
                                                    <span class="btn btn-secondary">
                                                        <i class="far fa-play-circle"></i>&nbsp; {{  $lab->descricao }}
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <span class="btn btn-secondary">
                                                        {{  $lab->ordem }}
                                                    </span>
                                                </div>
                                                <div class="col">
                                                    <span class="btn btn-danger">
                                                        <i class="far fa-trash-alt"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                      </div>
                <!-- #Accordion -->
            </div>
        </div>
        <!-- #Conteúdo -->
            
@endsection