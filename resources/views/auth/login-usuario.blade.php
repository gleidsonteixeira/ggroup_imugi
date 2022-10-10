@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h4>Acessar Unifp</h4>
        <label for="email">{{ __('Seu Email'  ) }}</label>
        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="password">{{ __('Sua Senha') }}</label>
        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('lembre me') }}
            </label>
        </div>

        <button type="submit" class="click suave">
            {{ __('Login') }}
        </button>
    </form>
@endsection
