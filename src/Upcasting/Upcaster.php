<?php

namespace EventSauce\EventSourcing\Upcasting;

use Generator;

interface Upcaster
{
    public function canUpcast(string $type, array $message): bool;

    public function upcast(array $message): Generator;
}
