<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    // READ – listar despesas do utilizador autenticado
    public function index()
    {
        $expenses = Auth::user()->expenses()->orderBy('expense_date', 'desc')->get();
        return view('expenses.index', compact('expenses'));
    }

    // CREATE – mostrar formulário
    public function create()
    {
        return view('expenses.create');
    }

    // STORE – guardar despesa
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'value' => 'required|numeric|min:0.01',
            'expense_date' => 'required|date',
        ]);

        Auth::user()->expenses()->create($request->all());
        return redirect()->route('expenses.index')->with('success', 'Despesa criada com sucesso!');
    }

    // EDIT – mostrar formulário de edição
    public function edit($id)
    {
        $expense = Auth::user()->expenses()->findOrFail($id);
        return view('expenses.edit', compact('expense'));
    }

    // UPDATE – atualizar despesa
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'value' => 'required|numeric|min:0.01',
            'expense_date' => 'required|date',
        ]);

        $expense = Auth::user()->expenses()->findOrFail($id);
        $expense->update($request->all());
        return redirect()->route('expenses.index')->with('success', 'Despesa atualizada com sucesso!');
    }

    // DELETE – apagar despesa
    public function destroy($id)
    {
        $expense = Auth::user()->expenses()->findOrFail($id);
        $expense->delete();
        return redirect()->route('expenses.index')->with('success', 'Despesa apagada com sucesso!');
    }
}
