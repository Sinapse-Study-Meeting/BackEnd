<!DOCTYPE html>
<html lang="pt-br">

<head>

   <title>SINAPSE - Grupo de estudos</title>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="">

   <meta charset="utf-8">
   <meta name="description" content="A plataforma para você encontrar sua companhia de estudos">
   <meta name="keywords" content="Sinapse, estudar, grupos">
   <!-- FavIcon -->
   <link rel="icon" href="{{asset('img/favicon.svg')}}">

   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

   <link rel="stylesheet" href="{{ asset('css/base.min.css') }}">

</head>

<body>
   @include('layouts.navbar')

   <main>
      <section class="register-section">
         <div class="register-section__item">
            <h2 class="welcome-sub-info">Faça seu cadastro abaixo:</h2>
            <hr>
            <form method="POST" action="{{ route('register') }}">
               @csrf
                <div class="input-field">
                    <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label for="name">Nome</label>
                    <div class="icones">
                        <img src="{{asset('img/bxs-user.svg')}}">
                     </div>
                    
                </div>
                @error('name')
                  <span class="invalid-feedback" role="alert" style="display: block;">
                        <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <div class="form-group mt-4">
                  <label for="estado">Estados</label>
                    <select class="form-control" id="estado" name="state" class="@error('state') is-invalid @enderror" required>
                      <option disabled selected>Selecione</option>

                    </select>
                  </div>
                  @error('state')
                    <span class="invalid-feedback" role="alert" style="display: block;">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <div class="form-group mt-4">
                    <label for="cidade">Cidades</label>
                      <select class="form-control" id="cidade"  name="city" class="@error('city') is-invalid @enderror" required>
                        <option disabled selected>Selecione o estado primeiro</option>

                      </select>
                    
                    </div>
                    @error('city')
                     <span class="invalid-feedback" role="alert" style="display: block;">
                           <strong>{{ $message }}</strong>
                     </span>
                  @enderror
                <div class="input-field">
                    <input type="text" id="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" >
                    <label for="email">E-mail</label>
                    <div class="icones">
                     <img src="{{asset('img/mail-send.svg')}}">
                  </div>
                </div>
                @error('email')
                  <span class="invalid-feedback" role="alert" style="display: block;">
                        <strong>{{ $message }}</strong>
                  </span>
                  @enderror
            
                <div class="input-field">
                    <input type="password" id="senha" name="password" class="@error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="new-password">
                    <label for="senha">Senha</label>
                    <div class="mostrarsenha" onclick="mostrarSenha()"><img src="{{asset('img/bxs-show.svg')}}" alt="Mostrar senha"></div>
                    <div class="icones">
                     <img src="{{asset('img/key.svg')}}">
                  </div>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert" style="display: block;">
                      <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-field">
                  <input type="password" id="confirmarsenha" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" required autocomplete="new-password">
                  <label for="confirmarsenha">Confirmar senha</label>
                  <div class="mostrarsenha" onclick="mostrarSenha2()"><img src="{{asset('img/bxs-show.svg')}}" alt="Mostrar senha"></div>
                  <div class="icones">
                     <img src="{{asset('img/key.svg')}}">
                  </div>
              </div>
              @error('password_confirmation')
                  <span class="invalid-feedback" role="alert" style="display: block;">
                     <strong>{{ $message }}</strong>
                  </span>
               @enderror
               <div class="bt">
                  <input type="submit" class="button-proximo" value="PRÓXIMO">
               </div>
            </form>

         </div>
         <div class="register-section__item">
            <img class="estudos" src="{{  asset('img/estudos.png') }}">
         </div>
      </section>

   </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script src="{{asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/cidade_estado.js') }}"></script>
    <script src="{{asset('js/mostrarsenha.js') }}"></script>

</body>

</html>
