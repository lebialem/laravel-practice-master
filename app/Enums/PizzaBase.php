<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PizzaBase extends Enum
{
    const CHEESY_CRUST = 'cheesy crust';
    const GARLIC_CRUST = 'garlic crust';
    const THIN_CRISPY = 'thin & crispy';
}