<?php

namespace App\Models;

use App\Enums\PizzaBase;
use App\Enums\PizzaType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pizza extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'age',
        'slug',
        'price',
        'description',
        'base',
        'type',
    ];

    /**
     * Cast attributes to their correct data types
     */
    protected $casts = [
        'base' => PizzaBase::class,
        'type' => PizzaType::class,
        'price' => 'decimal:2',
    ];
}
