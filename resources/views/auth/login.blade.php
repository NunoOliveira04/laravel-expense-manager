@extends('layouts.app')

@section('content')
<div class="auth-container">
    <div class="card auth-card">
        <div class="card-header">
            <h2>🔐 Entrar</h2>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">📧 Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="seu@email.com" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">🔑 Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>

            <div class="form-group remember-group">
                <label class="checkbox-label">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>Lembrar-me</span>
                </label>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-full">Entrar</button>
            </div>
        </form>

        <div class="auth-footer">
            <p>Não tem conta? <a href="{{ route('register') }}">Criar conta</a></p>
        </div>
    </div>
</div>

<style>
    .auth-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: calc(100vh - 200px);
    }
    .auth-card {
        width: 100%;
        max-width: 420px;
    }
    .btn-full {
        width: 100%;
        padding: 14px;
    }
    .auth-footer {
        text-align: center;
        margin-top: 24px;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.06);
        color: #6b6b7b;
    }
    .auth-footer a {
        color: #6366f1;
        text-decoration: none;
    }
    .auth-footer a:hover {
        text-decoration: underline;
    }
    .remember-group {
        margin-bottom: 0;
    }
    .checkbox-label {
        display: flex;
        align-items: center;
        gap: 8px;
        cursor: pointer;
        font-weight: normal;
        color: #a1a1aa;
    }
    .checkbox-label input[type="checkbox"] {
        width: 18px;
        height: 18px;
        accent-color: #6366f1;
    }
    .alert-danger {
        background: rgba(239, 68, 68, 0.12);
        color: #f87171;
        border: 1px solid rgba(239, 68, 68, 0.2);
        padding: 14px 18px;
        border-radius: 10px;
        margin-bottom: 20px;
    }
</style>
@endsection
