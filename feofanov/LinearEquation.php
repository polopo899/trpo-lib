<?php

namespace feofanov;

class LinearEquation
{
    public function LinearEquation($a, $b)
    {
        if ($a == 0) {
            throw new FeofanovException("Equation hasn't solutions. \n\r");
        }

        MyLog::log("It's linear equation. \n\r");
        return $this->x = [($b * (-1) / $a)];
    }

    protected $x;
}