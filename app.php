<?php

declare(strict_types=1);

use Thiiagoms\LSP\Services\Mechanic\MechanicService;
use Thiiagoms\LSP\Services\Vehicle\AudiService;
use Thiiagoms\LSP\Services\Vehicle\MercedesService;

require_once __DIR__ . '/vendor/autoload.php';

$mechanic = new MechanicService();

$mercedes = new MercedesService('Tire');
$audi = new AudiService('Break');

echo $mechanic->fix($mercedes) . PHP_EOL;
echo $mechanic->fix($audi) . PHP_EOL;
