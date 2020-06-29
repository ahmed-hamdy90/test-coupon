<?php

namespace Test;

class PercentageSlabCoupon extends SlabCoupon {

    public function calculateDiscount($amount)
    {
        $numOfUnits = floor($amount / $this->discountUnit);
        $discountableAmount = $this->discountUnit * $numOfUnits;
        $discountPercentage = $this->discountAmount / 100;

        return $discountableAmount * $discountPercentage;
    }
}