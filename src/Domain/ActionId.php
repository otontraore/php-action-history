<?php

declare(strict_types=1);

namespace Oton\ActionHistory\Domain;

final readonly class ActionId
{
    public function __construct(public string $value)
    {
        if ($value === '') {
            throw new \InvalidArgumentException('Action ID cannot be empty.');
        }
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
