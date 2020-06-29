<?php

namespace Test;

class PercentageAbsoluteCoupon extends AbsoluteCoupon {

    public function calculateDiscount($amount)
    {
        return $amount * $this->discountPercentage;
    }
}