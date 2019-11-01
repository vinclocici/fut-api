<?php

declare(strict_types=1);

namespace Shapecode\FUT\Client\Items;

class Config
{
    /** @var string */
    private $name;

    /** @var mixed */
    private $value;

    /**
     * @param mixed $value
     */
    public function __construct(string $name, $value)
    {
        $this->name  = $name;
        $this->value = $value;
    }

    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}