<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/sb-admin-2.min.css')}}">
    <title>Alteração de Senha</title>
    <style>
        *{
            padding:0px;
            margin:0px;
            box-sizing: border-box;
            }
        .row{
            box-shadow: 12px 12px 22px grey; 
            border-radius: 30px;
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius:30px; 
        }
    </style>
</head>
<body>
        <section class="Form my-3 pt-5 mt-5" >
            <div class="container bg-white">
                @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="row">
                    <div class="col-12 col-md-3 pt-2 mb-3">
                        <img src="/img/undraw_Mail_sent_re_0ofv.svg"  class="img-fluid" alt="reset">
                    </div>
                    <div class="col-lg-8 px-5 pt-3">
                        <h2 class="font-wight-bold" style="font-family:DejaVu Sans Mono, monospace;">NPI Web Academy - Alterar Senha</h2>               
                        <form method="POST" action="{{ route('password.email') }}">
                          @csrf
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="email" class="col-form-label">Endereço de Email</label>
                                    <input type="email" class="form-control my-2 p-2 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-danger mt-3 mb-2" style="width:100%;">
                                        Enviar link para alterar senha
                                    </button>
                                </div>
                            </div><!--
                            @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Esqueceu a senha?') }}
                                        </a>
                            @endif -->
                        </form>
                        <div class="mb-3">
                            <a href="{{ route('login') }}" class="">Voltar para página de login!</a><br>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>