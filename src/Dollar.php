<?php

namespace isanasan\phptddbook;

class Dollar extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function currency(): string
    {
        return 'USD';
    }

    public function times(int $multiplier):Money
    {
        return (new Dollar($this->amount * $multiplier));
    }
}
