<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PizzaType extends Enum
{
    const HAWAIIAN = 'hawaiian';
    const VOLCANO = 'volcano';
    const VEG_SUPREME = 'veg supreme';
}
