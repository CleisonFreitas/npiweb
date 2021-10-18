@extends('admin.blank')

@section('title','Laboratório')

@section('admin','- Laboratório')

@section('content')

<!-- Conteúdo --> 
<div class="card shadow">
    <div class="card-body">
        <h1 class="h3 mb-4 text-gray-600">Laboratório</h1>


        <!-- Espelho para edição de formação -->
        @foreach($formacoes as $f)
            <div class="form-group row">
                <div class="col-8 col-sm-8 col-lg-12" >
                    <label for="formacao">Formação: </label>
                    <input type="text" value="{{$f->id}} - {{$f->descricao}}" id="" class="form-control" readonly>
                    <a href="{{ route('admin.laboratorio') }}" class="btn btn-secondary btn-circle mt-1" >
                        <i class="fas fa-undo-alt"></i>
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
                            <label for="id" class="col-form-label" >Marca:</label>
                            <div class="col">
                                <input type="text" name="etiqueta" id="" class="form-control" placeholder="Etiqueta">
                            </div>
                            <div class="col">
                                <input type="text" name="ordem" id="" class="form-control" placeholder="Ordem">
                            </div>      
                        </div>   
                        <div class="form-group row">
                            <label for="ident" class="col-form-label" style="margin-right:14px;">Link:</i></label>
                            <div class="col">
                                <input type="text" name="iframe" id="" class="form-control" placeholder="Cole o link do conteúdo aqui!">
                            </div> 
                        </div> 
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-sm" >Salvar</button>
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
                                <div class="card-header bg-light text-secondary shadow">
                                        <h5><i class="fas fa-film"></i>&nbsp;Conteúdo</h5>
                                </div>
                                @foreach($laboratorio as $lab)
                                    @if($lab->tipo == "I")
                                    <div class="card-header bg-gray-300 border-1" id="headon">
                                        <h2 class="mb-0">
                                            <div class="row">
                                                <div class="col-12 col-sm-10 col-lg-11">
                                                    <a class="btn btn-outline-dark" type="button" data-toggle="collapse" data-target="#e_{{$lab->etiqueta }}" aria-expanded="false" aria-controls="e_{{$lab->etiqueta }}" style="width:100%">
                                                        {{ $lab->etiqueta }} - {{  $lab->descricao }} 
                                                    </a>
                                                </div>
                                                <div class="col-12 col-sm-10 col-lg-1">
                                                    <a href="{{ route('admin.del_lab',$lab->id) }}" class="btn btn-circle" style="width:100%"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </div>
                                        </h2>
                                        
                                    </div>
                                    @elseif($lab->tipo == "C")
                                        <div id="e_{{$lab->etiqueta }}" class="collapse" aria-labelledby="headon" data-parent="#accordionExample">
                                            <div class="card-body bg-gray-300">
                                                <hr class="sidebar-divider mt-0">
                                                <div class="row">
                                                    <div class="col col-sm-6 col-lg-7">
                                                        <span class="btn btn-secondary">
                                                            <i class="far fa-play-circle"></i>&nbsp; {{  $lab->descricao }}
                                                        </span>
                                                    </div>
                                                    <div class="col col-sm-6 col-lg-3">
                                                        <span class="btn btn-secondary">
                                                            {{  $lab->ordem }}
                                                        </span>
                                                    </div>
                                                    <div class="col col-sm-6 col-lg-2">
                                                        <a href="{{ route('admin.del_lab',$lab->id) }}" class="btn btn-danger">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
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
    </div>
</div>   
    
            
@endsection