<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PizzaModule extends Model
{
    use HasFactory;

    protected $fillable = [
        'pizza_id',
        'content',
    ];

    /**
     * Get the pizza that this module belongs to.
     */
    public function pizza(): BelongsTo
    {
        return $this->belongsTo(Pizza::class, 'pizza_id');  // If pizza does not uses soft deletes
    }

    // /**
    //  * Get the pizza that this module belongs to.
    //  */
    // public function pizza(): BelongsTo
    // {
    //     return $this->belongsTo(Pizza::class, 'pizza_id')->withTrashed();  // If pizza uses soft deletes
    // }
}