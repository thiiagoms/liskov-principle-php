<?php

declare(strict_types=1);

namespace Thiiagoms\LSP\Services\Vehicle;

use Thiiagoms\LSP\Contracts\FixableContract;

abstract class VehicleService implements FixableContract
{
    public function __construct(protected readonly string $problemType) {}

    public function problem(): string
    {
        return $this->problemType;
    }
}
