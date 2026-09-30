<?php

declare(strict_types=1);

namespace Oton\ActionHistory\Domain;

interface ActionRepository
{
    public function record(Action $action): void;
}
