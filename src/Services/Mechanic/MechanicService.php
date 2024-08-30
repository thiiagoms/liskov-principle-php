<?php

declare(strict_types=1);

namespace Thiiagoms\LSP\Services\Mechanic;

use Thiiagoms\LSP\Contracts\FixableContract;

class MechanicService
{
    public function fix(FixableContract $car): string
    {
        return 'Mechanic is fixing ' . get_class($car) . ' ' . $car->problem();
    }
}