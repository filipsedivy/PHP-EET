<?php declare(strict_types=1);

namespace XSuchy09\EET\Utils;

use Ramsey;

class UUID
{
    /**
     * @return string
     * @throws \Exception
     * @deprecated Use Ramsey\Uuid\Uuid::uuid4() instead
     */
    public static function v4(): string
    {
        return Ramsey\Uuid\Uuid::uuid4()->toString();
    }
}