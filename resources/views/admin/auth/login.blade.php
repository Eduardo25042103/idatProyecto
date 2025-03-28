<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap-social/bootstrap-social.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css')}}">

  <link rel="stylesheet" href="{{ asset('backend/assets/style.css')}}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;700&family=Saira+Stencil+One&display=swap" rel="stylesheet">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>

    
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
    <div class="container-fluid vh-100">
        <div class="row h-100 g-0">
            <div class="col-md-6 left-side p-5 d-flex flex-column justify-content-center">
                <div >
                    <img src="{{ asset('backend/assets/img/logo-01.png')}}" width="400px" alt="Atlantic City">
                    <div class="content mt-2">
                        <h2>Sistema de Gestión de Clientes</h2>
                        <div class="features">
                            <div class="feature d-flex align-items-center mb-3">
                                <img src="{{ asset('backend/assets/img/game-structure.png')}}" alt="Gestion Centralizada" class="me-5" style="width: 30px";>
                                <p class="mb-2">GESTIÓN GLOBAL Y CENTRALIZADA</p>
                            </div>
                            <div class="feature d-flex align-items-center">
                                <img src="{{ asset('backend/assets/img/Icones.png')}}" alt="Sistema de Control" class="me-5" style="width: 30px";>
                                <p class="mb-2">SISTEMA DE CONTROL DE PROMOCIONES</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 right-side d-flex justify-content-center align-items-center">
                <div class="login-form w-75">
                    <h1 class="mb-4">LOGIN</h1>
                    <form method="POST" action="{{ route('login')}}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input id="email" type="email" class="form-control mb-3"  name="email" autofocus value="{{ old('email')}}">
                            <div class="invalid-feedback">
                                Por favor, ingrese un Usuario.
                            </div>

                            @if($errors->has('email'))
                                <code>{{ $errors->first('email') }}</code>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control mb-3" id="password" name="password">
                            <div class="invalid-feedback">
                                Por favor, ingrese su contraseña.
                            </div>

                            @if($errors->has('password'))
                                <code>{{ $errors->first('password') }}</code>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-atlantic px-5">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
  <!-- General JS Scripts -->
  <script src="{{ asset('backend/assets/modules/jquery.min.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/popper.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/tooltip.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('backend/assets/modules/moment.min.js')}}"></script>
  <script src="{{ asset('backend/assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('backend/assets/js/scripts.js')}}"></script>
  <script src="{{ asset('backend/assets/js/custom.js')}}"></script>
</body>
</html>