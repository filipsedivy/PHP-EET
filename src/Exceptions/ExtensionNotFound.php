<?php declare(strict_types=1);

namespace XSuchy09\EET\Exceptions;

use Throwable;

class ExtensionNotFound extends UnexpectedException
{
    public function __construct(string $extension, int $code = 0, ?Throwable $previous = null)
    {
        $message = "Extension '$extension' not found";
        parent::__construct($message, $code, $previous);
    }
}