@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>📋 Lista de Despesas</h2>
        <a href="{{ route('expenses.create') }}" class="btn btn-primary">+ Nova Despesa</a>
    </div>

    @if($expenses->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Valor</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expenses as $expense)
                <tr>
                    <td>{{ $expense->category }}</td>
                    <td class="value-positive">{{ number_format($expense->value, 2, ',', '.') }} €</td>
                    <td>{{ \Carbon\Carbon::parse($expense->expense_date)->format('d/m/Y') }}</td>
                    <td class="actions">
                        <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-warning btn-sm">✏️ Editar</a>
                        <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Tens a certeza que queres apagar esta despesa?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">🗑️ Apagar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="total-bar">
            <span>Total de Despesas:</span>
            <strong>{{ number_format($expenses->sum('value'), 2, ',', '.') }} €</strong>
        </div>
    @else
        <div class="empty-state">
            <p>Ainda não tens despesas registadas.</p>
            <a href="{{ route('expenses.create') }}" class="btn btn-primary">Criar a primeira despesa</a>
        </div>
    @endif
</div>
@endsection
