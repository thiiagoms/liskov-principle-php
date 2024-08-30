<?php

declare(strict_types=1);

namespace Thiiagoms\LSP\Contracts;

interface FixableContract
{
    public function problem(): string;
}