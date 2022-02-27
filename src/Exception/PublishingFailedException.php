<?php
declare(strict_types=1);

namespace Szemul\Queue\Exception;

use Exception;
use JetBrains\PhpStorm\Pure;
use Szemul\Queue\Message\MessageInterface;
use Throwable;

class PublishingFailedException extends Exception
{
    #[Pure]
    public function __construct(
        protected MessageInterface $messageToPublish,
        string $message = '',
        int $code = 0,
        ?Throwable $previous = null,
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function getMessageToPublish(): MessageInterface
    {
        return $this->messageToPublish;
    }
}
