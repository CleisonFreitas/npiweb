<div class="card-body">
    <div class="row row-cols-1 row-cols-lg-2 g-2">
        @foreach ($conteudo as $conteudo)
        <div class="card mb-3 mr-5" style="max-width: 600px;">
          <div class="row g-0">
            <div class="col-12 col-md-6 col-lg-6">
              <img src="{{asset($img)}}" class="img-fluid rounded-start" alt="conteudo" style="max-width: 100%;">
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <div class="card-body">
                <h5 class="card-title">{{$conteudo->descricao}}</h5>
                <p class="card-text">Curso: {{$conteudo->ordem}}</p>
                <a href="{{ route($route,$conteudo->id) }}" class="card-text"><small class="text-muted">Acessar</small></a>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3" style="max-width: 420px;">
          <div class="card-body bg-light">
            {{$conteudo->sobre}}
          </div>
        </div>
        @endforeach
    </div>
</div>