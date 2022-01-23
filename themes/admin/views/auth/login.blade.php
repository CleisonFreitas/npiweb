<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Login</title>

     <!-- Custom fonts for this template -->
     <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="{{ asset('css/googleapi.css') }}" rel="stylesheet">
 
     <!-- Custom styles for this template -->
     <link href="{{ asset('css/npiweb.css') }}" rel="stylesheet">
 
     <!-- Custom styles for this page -->
     <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    


    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">

</head>
<body class="bg-light">
    <section class="Form mt-3 ">
        <div class="container" style="margin-top:100px; border-radius:20px;">
            <div class="row">
                <h2 class="font-wight-bold py-3" style="font-family:DejaVu Sans Mono, monospace; margin-left:27%;">NPI Web Admin</h2>
            </div>
            <div class="row">
                <div class="col-lg-5 my-2">
                    <img src="/img/undraw_co-working_825n.svg" class="img-fluid" alt="login">
                </div>
                <div class="col-lg-6 px-5 pt-3">                     
                    <form method="POST" action="{{route('admin.acessar')}}">
                        @csrf
                        <div class="form-row">
                            <div class="col col-md-10">
                                <label for="email" class="col-form-label">{{ __('Endereço de Email:') }}</label>
                                <input type="email" class="form-control my-2 p-2 @error('email') is-invalid @enderror" placeholder="Digite aqui seu e-mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col col-md-10">
                                <label for="password" class="col-form-label">{{ __('Senha: ') }}</label><br>
                                <input type="password" class="form-control my-2 p-2 @error('password') is-invalid @enderror" name="password" placeholder="***********" required autocomplete="current-password"><br>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row" style="margin-left:30%;margin-top:-10px;">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row my-2">
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-sm btn-secondary" style="width:100%; border-radius:10rem;">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Bootstrap core JavaScript-->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
        <!-- Core plugin JavaScript-->
        <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    </body>
</html>
