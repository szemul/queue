<?php
declare(strict_types=1);

namespace Szemul\Queue\Message;

class Message implements MessageInterface
{
    /**
     * @param mixed[] $payload
     */
    public function __construct(
        protected string $jobName,
        protected array $payload,
        protected ?string $queueIdentifier = null,
    ) {
    }

    public function getPayload(): array
    {
        return $this->payload;
    }

    public function getJobName(): ?string
    {
        return $this->jobName;
    }

    public function getQueueIdentifier(): ?string
    {
        return $this->queueIdentifier;
    }

    public function setQueueIdentifier(string $identifier): static
    {
        $this->queueIdentifier = $identifier;

        return $this;
    }
}
