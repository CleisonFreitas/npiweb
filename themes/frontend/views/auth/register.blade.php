@extends('/layouts.app')

@section('content')
<body>
    <section class="Form my-3 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 pt-2">
                    <img src="img/registro.jpg" class="img-fluid" alt="registrar">
                </div>
                <div class="col-lg-7 px-5 pt-3">
                    <h2 class="font-wight-bold py-3" style="font-family:DejaVu Sans Mono, monospace;">NPI Web Academy</h2>
                    <h5 style="font-family:DejaVu Sans Mono, monospace;">Registre-se para acessar o conteúdo!</h5>                     
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-row">
                                <div class="col-md-10">
                                    <label for="nome">{{ __('Nome:') }}</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" data-ls-module="charCounter" maxlength="14" required autocomplete="name" autofocus placeholder="Ex:. LucianaD">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-10">
                                    <label for="nome">Email:</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ex:. lucinf@example.com">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-5">
                                    <label for="nome">Senha:</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="********">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-5">
                                    <label for="password-confirm" >{{ __('Confirmar senha: ') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="********">
                                </div>
                            </div>
                            <div class="col">
                                <input type="hidden" name="cnpj" value="">
                            </div>
                            <div class="form-row">
                                <div class="col-md-8">
                                    <button type="submit" class="btn-1 mt-3 mb-2">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
  @endsection