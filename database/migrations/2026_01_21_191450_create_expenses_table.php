<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->decimal('value', 8, 2);      // valor da despesa
            $table->string('category');          // categoria
            $table->date('expense_date');        // data da despesa
            $table->timestamps();                // created_at / updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
