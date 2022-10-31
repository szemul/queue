<?php
declare(strict_types=1);

namespace Szemul\Queue\Message;

use Carbon\CarbonInterface;

interface MessageInterface
{
    /** @return mixed[] */
    public function getPayload(): array;

    public function getJobName(): ?string;

    public function getQueueIdentifier(): ?string;

    public function setQueueIdentifier(string $identifier): static;

    public function getCreatedAt(): CarbonInterface;
}
