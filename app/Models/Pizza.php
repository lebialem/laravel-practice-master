<?php

namespace App\Models;

use App\Enums\PizzaBase;
use App\Enums\PizzaType;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pizza extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasSlug;

    protected $fillable = [
        'name',
        'age',
        'slug',
        'user_id',
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

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['name', 'description'])
            ->saveSlugsTo('slug');
    }

    public function pizzaModule(): HasMany
    {
        return $this->hasMany(PizzaModule::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
