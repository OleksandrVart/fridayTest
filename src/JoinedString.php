<?php

declare(strict_types=1);

namespace OleksandrVart\fridayTest;

class JoinedString
{
    private $readyString;
    public function __construct(string $delimiter, array $array)
    {
        $this->readyString = implode($delimiter, $array);
    }

    public function __toString()
    {
        return $this->readyString;
    }

    public function show(): string
    {
        return $this->readyString;
    }
}
