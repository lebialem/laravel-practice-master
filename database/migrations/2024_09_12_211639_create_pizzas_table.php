<?php

use App\Enums\PizzaBase;
use App\Enums\PizzaType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->string('name');
            $table->string('age');
            $table->text('description');
            $table->string('slug')->unique();
            $table->decimal('price', 8, 2);
            $table->enum('base', PizzaBase::asArray())->default(PizzaBase::CHEESY_CRUST);
            $table->enum('type', PizzaType::asArray())->default(PizzaType::HAWAIIAN);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pizzas');
    }
};