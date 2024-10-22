@extends('layouts.app')
@include('components.register')


@section('content')

<!DOCTYPE html>
<html lang="en">

<body>
    <div class="container-form login">
        
        <div class="form-information">
            <div class="form-information-">
                <h2>¡Bienvenid@! al registro</h2>
                <h2>de usuarios🚑</h2>
                <br>
                <p>Ingresa las credenciales</p>
                <form class="form form-register" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <label>
                            <i class='bx bx-user'></i>
                            <input class="input_custom" id="name" type="name" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Usuario">
                            
                        </label>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-user'></i>
                            <input class="input_custom" id="lastname" type="lastname" @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Apellido">
                            
                        </label>
                        @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-user'></i>
                            <input class="input_custom" id="username" type="username" @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="user">
                            
                        </label>
                        @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div>
                        <label>
                            <i class='bx bx-key'></i>
                            <input class="input_custom" id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus placeholder="Contraseña">
                        </label>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div>
                        <label>
                            <i class='bx bx-key'></i>
                            <input class="input_custom" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" autofocus placeholder="Confirmar Contraseña">
                        </label>
                    </div>

                    
                    <input type="submit" value="Registrar">
                </form>
            </div>
        </div>
        <div class="information">
            <div class="info-childs">
                <img src="{{ asset('img/cruz-roja-logo.jpeg') }}" alt="Cruz Roja" style="height: 100px">
                <h2>Sistema de vales de combustible</h2>
                <span>Cruz Roja Salvadoreña</span>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
