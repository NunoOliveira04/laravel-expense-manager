@extends('layouts.app')

@section('content')
<div class="auth-container">
    <div class="card auth-card">
        <div class="card-header">
            <h2>✨ Criar Conta</h2>
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="error-list">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">👤 Nome</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="O seu nome" required autofocus>
            </div>

            <div class="form-group">
                <label for="email">📧 Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="seu@email.com" required>
            </div>

            <div class="form-group">
                <label for="password">🔑 Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Mínimo 6 caracteres" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">🔑 Confirmar Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Repita a password" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-success btn-full">Criar Conta</button>
            </div>
        </form>

        <div class="auth-footer">
            <p>Já tem conta? <a href="{{ route('login') }}">Entrar</a></p>
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
        color: #10b981;
        text-decoration: none;
    }
    .auth-footer a:hover {
        text-decoration: underline;
    }
    .alert-danger {
        background: rgba(239, 68, 68, 0.12);
        color: #f87171;
        border: 1px solid rgba(239, 68, 68, 0.2);
        padding: 14px 18px;
        border-radius: 10px;
        margin-bottom: 20px;
    }
    .error-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .error-list li {
        margin-bottom: 4px;
    }
    .error-list li:last-child {
        margin-bottom: 0;
    }
</style>
@endsection
