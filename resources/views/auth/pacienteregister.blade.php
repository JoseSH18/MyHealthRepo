@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar Paciente') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="cedula" class="col-md-4 col-form-label text-md-end">{{ __('Cédula') }}</label>

                            <div class="col-md-6">
                                
                                <input id="cedula" type="text" class="form-control" name="cedula" required autocomplete="new-nombre2">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Primer Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nombre2" class="col-md-4 col-form-label text-md-end">{{ __('Segundo Nombre') }}</label>

                            <div class="col-md-6">
                                
                                <input id="nombre2" type="text" class="form-control" name="nombre2" required autocomplete="new-nombre2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="apellido1" class="col-md-4 col-form-label text-md-end">{{ __('Primer Apellido') }}</label>

                            <div class="col-md-6">
                                
                                <input id="apellido1" type="text" class="form-control" name="apellido1" required autocomplete="new-apellido1">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="apellido2" class="col-md-4 col-form-label text-md-end">{{ __('Segundo Apellido') }}</label>

                            <div class="col-md-6">
                                
                                <input id="apellido2" type="text" class="form-control" name="apellido2" required autocomplete="new-apellido2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telefono" class="col-md-4 col-form-label text-md-end">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                
                                <input id="telefono" type="text" class="form-control" name="telefono" required autocomplete="new-telefono">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="estadocivil" class="col-md-4 col-form-label text-md-end">{{ __('Estado Civil') }}</label>

                            <div class="col-md-6">
                                
                                <select id="estadocivil" type="text" class="form-control" name="estadocivil" required autocomplete="new-estadocivil">
                                    <option value="Soltero">Soltero</option>
                                    <option value="Casado" selected>Casado</option>
                                    <option value="Divorciado" selected>Divorciado</option>
                                    <option value="Viudo" selected>Viudo</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                           

                            <div class="col-md-6">
                                
                            <input id="role" type="text" class="form-control" name="role" required autocomplete="new-role" value='Paciente' hidden>
                                 

                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
