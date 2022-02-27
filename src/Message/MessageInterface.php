<?php
declare(strict_types=1);

namespace Szemul\Queue\Message;

interface MessageInterface
{
    /** @return mixed[] */
    public function getPayload(): array;

    public function getJobName(): ?string;

    public function getQueueIdentifier(): ?string;

    public function setQueueIdentifier(string $identifier): static;
}
