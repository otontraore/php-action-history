<?php

declare(strict_types=1);

namespace Oton\ActionHistory\Domain;

use DateTimeImmutable;

final readonly class Action
{
    public function __construct(
        public ActionId $id,
        public string $name,
        public string $subjectType,
        public string $subjectId,
        public DateTimeImmutable $occurredAt,
        public ?string $actorType = null,
        public ?string $actorId = null,
        public array $changes = [],
        public array $metadata = [],
        public ?string $correlationId = null,
        public ?string $causationId = null,
    ) {
        if ($name === '') {
            throw new \InvalidArgumentException('Action name cannot be empty.');
        }

        if ($subjectType === '' || $subjectId === '') {
            throw new \InvalidArgumentException('Action subject must have a type and identifier.');
        }
    }
}
