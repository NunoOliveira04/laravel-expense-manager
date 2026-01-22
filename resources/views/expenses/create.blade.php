@extends('layouts.app')

@section('content')
<a href="{{ route('expenses.index') }}" class="back-link">← Voltar à lista</a>

<div class="card">
    <div class="card-header">
        <h2>✨ Nova Despesa</h2>
    </div>

    <form method="POST" action="{{ route('expenses.store') }}">
        @csrf

        <div class="form-group">
            <label for="category">🏷️ Categoria</label>
            <input type="text" id="category" name="category" class="form-control" placeholder="Ex: Alimentação, Transporte, Lazer..." required>
        </div>

        <div class="form-group">
            <label for="value">💶 Valor (€)</label>
            <input type="number" id="value" step="0.01" min="0.01" name="value" class="form-control" placeholder="0.00" required>
        </div>

        <div class="form-group">
            <label for="expense_date">📅 Data da Despesa</label>
            <input type="date" id="expense_date" name="expense_date" class="form-control" value="{{ date('Y-m-d') }}" required>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-success">🚀 Guardar Despesa</button>
            <a href="{{ route('expenses.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>

<style>
    .back-link {
        display: inline-block;
        color: #a1a1aa;
        text-decoration: none;
        margin-bottom: 20px;
        font-size: 0.9rem;
        transition: color 0.2s ease;
    }
    .back-link:hover {
        color: #6366f1;
    }
    .form-actions {
        display: flex;
        gap: 12px;
        margin-top: 28px;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.06);
    }
</style>
@endsection
