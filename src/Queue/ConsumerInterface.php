<?php
declare(strict_types=1);

namespace Szemul\Queue\Queue;

use Szemul\Queue\Message\MessageInterface;

interface ConsumerInterface
{
    public function getMessage(): ?MessageInterface;

    public function abortMessage(MessageInterface $message): void;

    public function finishMessage(MessageInterface $message): void;
}
