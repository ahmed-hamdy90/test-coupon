<?php

namespace Test;

class FixedSlabCoupon extends SlabCoupon {

    public function calculateDiscount($amount)
    {
        $numOfUnits = floor($amount / $this->discountUnit);
        return $numOfUnits * $this->discountAmount;
    }
}