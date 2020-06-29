<?php

namespace Test;

class FixedAbsoluteCoupon extends AbsoluteCoupon {

    public function calculateDiscount($amount)
    {
        return $this->discountAmount;
    }
}