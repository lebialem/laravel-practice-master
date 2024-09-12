<?php

use App\Enums\PizzaBase;
use App\Enums\PizzaType;
use App\Models\Pizza;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('slug')->unique();
            $table->string('price');
            $table->enum('base', [PizzaBase::asArray()])->default(PizzaBase::CHEESY_CRUST);
            $table->enum('type', [PizzaType::asArray()])->default(PizzaType::HAWAIIAN);
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
