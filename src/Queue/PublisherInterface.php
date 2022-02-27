<?php
declare(strict_types=1);

namespace Szemul\Queue\Queue;

use Szemul\Queue\Exception\PublishingFailedException;
use Szemul\Queue\Message\MessageInterface;

interface PublisherInterface
{
    /**
     * Publishes a message to the queue for immediate consumption.
     *
     * Implementers SHOULD set the message identifier if it's available on the message.
     *
     * @throws PublishingFailedException
     */
    public function publishMessage(MessageInterface $message): void;
}
