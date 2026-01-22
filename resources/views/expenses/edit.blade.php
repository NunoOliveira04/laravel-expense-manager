@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>✏️ Editar Despesa</h2>
    </div>

    <form method="POST" action="{{ route('expenses.update', $expense->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="category">Categoria</label>
            <input type="text" id="category" name="category" class="form-control" value="{{ $expense->category }}" required>
        </div>

        <div class="form-group">
            <label for="value">Valor (€)</label>
            <input type="number" id="value" step="0.01" min="0.01" name="value" class="form-control" value="{{ $expense->value }}" required>
        </div>

        <div class="form-group">
            <label for="expense_date">Data da Despesa</label>
            <input type="date" id="expense_date" name="expense_date" class="form-control" value="{{ $expense->expense_date }}" required>
        </div>

        <div style="display: flex; gap: 10px;">
            <button type="submit" class="btn btn-success">💾 Atualizar Despesa</button>
            <a href="{{ route('expenses.index') }}" class="btn btn-secondary">← Voltar</a>
        </div>
    </form>
</div>
@endsection
