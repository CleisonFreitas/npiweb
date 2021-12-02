<div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($conteudo as $conteudo)
        <div class="col">
            <img src="..." class="card-img-top" alt="...">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $conteudo->descricao}}</h5>
                    <p class="card-text">{{ $conteudo->sobre}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>