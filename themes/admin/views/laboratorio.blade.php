@extends('admin.blank')

@section('title','Laboratório')

@section('admin','- Laboratório')

@section('content')

<!-- Conteúdo -->    
    <h1 class="h3 mb-4 text-gray-600">Laboratório</h1>

        <!-- Navbar link -->
        <div class="row mb-2">
            <div class="col col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#produção" role="tab" aria-controls="produção" aria-selected="true">Produção</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#formação" role="tab" aria-controls="formação" aria-selected="false">Formação</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#indice" role="tab" aria-controls="indice" aria-selected="false">Índice</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    
                    <!-- Produção -->
                    <div class="tab-pane fade show active mb-2" id="produção" role="tabpanel" aria-labelledby="home-tab">
                        
                        <h2 class="h5 mb-4 mt-3 text-dark">Controle de Formações</h2>

                        <form class="mt-4" action="{{route('admin.edit_show')}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col col-md-10">
                                    <select class="custom-select" name="conteudo" id="laboratorio">
                                        @if($laboratorio != null)
                                            @foreach($laboratorio as $lab)
            
                                                <option value="{{$lab->id}}">{{$lab->id}} - {{$lab->descricao}}</option>
            
                                            @endforeach
                                        @endif
                                    </select>
                                </div>    
                            </div>
                            <div class="form-group row">
                                <div class="col col-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="bi bi-plus-circle"></i></i>&nbsp;Gerar
                                    </button>
                                </div>
                            </div>
                           </form>
                    </div>
                    <!-- #Produção -->

                    <!-- Criação de Formação -->
                    <div class="tab-pane fade" id="formação" role="tabpanel" aria-labelledby="formação">
                        <h2 class="h5 mb-4 mt-3 text-dark">Criação de Formação</h2>
                            <form class="mt-4" action="{{ route('admin.form_novo') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="operador/data" class="col-12 col-sm-12 col-lg-2 col-form-label">Operador/Data:</label>
                                    <div class="col-5 col-sm-6 col-lg-4">
                                        <input type="text" value="{{Auth::guard('admin')->user()->name}}" name="operador" id="login" class="form-control" readonly>
                                    </div>
                                    <div class="col-7 col-sm-6 col-lg-4">
                                        <input type="date" value="{{ date('Y-m-d')}}" name="created_at" id="dt_cadastro" class="form-control" readonly>
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label for="categoria" class="col-12 col-sm-12 col-lg-2 col-form-label">Categoria/Nível</label>
                                    <div class="col-6 col-sm-6 col-lg-4">
                                        <select name="categoria" id="" class="custom-select">
                                            <option value="funerario">Funerário</option>
                                            <option value="cemiterio">Cemitério</option>
                                            <option value="clinica">Clínica</option>
                                            <option value="contabil">Contábil</option>
                                            <option value="emissor">E-Fiscal</option>
                                            <option value="mobile">Mobile</option>
                                            <option value="veicular">Veicular</option>
                                            <option value="telemarketing">Telemarketing</option>
                                            <option value="outro">Outro</option>
                                        </select>
                                    </div>
                                    <div class="col-6 col-sm-6 col-lg-4">
                                        <select name="nivel" id="nivel" class="custom-select">
                                            <option value="normal">Normal</option>
                                            <option value="especifico">Específico</option>
                                            <option value="equipe">Equipe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nome" class="col-12 col-sm-12 col-lg-2 col-form-label">Descrição:</label>
                                    <div class="col-12 col-sm-12 col-lg-8">
                                        <input type="text" name="descricao" id="curso" class="form-control" placeholder="Digite o nome da formação">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Criar</button>&nbsp;
                                        <button type="reset" class="btn btn-secondary">Cancelar</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <!-- #Criação de Formação -->

                    <!-- Criação de Índice -->
                    <div class="tab-pane fade" id="indice" role="tabpanel" aria-labelledby="contact-tab">
                        <h2 class="h5 mb-4 mt-3 text-dark">Criação de Índice</h2>
                            <form class="mt-4" action="{{ route('admin.indi_novo') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="operador/data" class="col-12 col-sm-12 col-lg-2 col-form-label">Operador/Data:</label>
                                    <div class="col-5 col-sm-6 col-lg-4">
                                        <input type="text" value="{{Auth::guard('admin')->user()->name}}" name="operador" id="login" class="form-control" readonly>
                                    </div>
                                    <div class="col-7 col-sm-6 col-lg-4">
                                        <input type="date" value="{{ date('Y-m-d')}}" name="created_at" id="dt_cadastro" class="form-control" readonly>
                                    </div>
                                </div>
                               <div class="form-group row">
                                    <label for="form_id" class="col-12 col-sm-2 col-lg-2  col-form-label">Formação:</label>
                                    <div class="col col-sm-10 col-lg-8">
                                        <select name="form_id" id="formacao" class="custom-select">
                                            @if($laboratorio)
                                                @foreach($laboratorio as $lab)
                                                    <option value="{{ $lab->id }}">{{ $lab->descricao }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>    
                               </div>
                                <div class="form-group row">
                                    <label for="nome" class="col-12 col-sm-3 col-lg-2 col-form-label">Descrição/Ordem:</label>
                                    <div class="col-7 col-sm-5 col-lg-5">
                                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Índice">
                                    </div>
                                    <div class="col-5 col-sm-3 col-lg-3">
                                        <input type="text" name="ordem" id="ordem" class="form-control" autofocus="focus" placeholder="Ordem">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Criar</button>&nbsp;
                                        <button type="reset" class="btn btn-secondary">Cancelar</button>
                                    </div>
                                </div>
                            </form>

                        
                    </div>
                    <!-- #Criação de Índice -->
                  </div>
            </div>
        </div>
        <!-- #Navbar -->

           
   
  
@endsection