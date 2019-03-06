<?php

namespace Rikudou\Iban\Helper;

trait ToStringIbanTrait
{
    public function __toString()
    {
        if (!method_exists($this, 'asString')) {
            return '';
        }

        try {
            return $this->asString();
        } catch (\Throwable $exception) {
            return '';
        }
    }
}
