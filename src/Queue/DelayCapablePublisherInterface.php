<?php
declare(strict_types=1);

namespace Szemul\Queue\Queue;

use DateInterval;
use Szemul\Queue\Exception\PublishingFailedException;
use Szemul\Queue\Message\MessageInterface;

interface DelayCapablePublisherInterface extends PublisherInterface
{
    /**
     * Publishes a message to the queue for consumption after a delay.
     *
     * Implementers SHOULD set the message identifier if it's available on the message.
     *
     * @throws PublishingFailedException
     */
    public function publishDelayed(MessageInterface $message, DateInterval $delay): void;
}
