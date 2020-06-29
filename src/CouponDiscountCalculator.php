<?php

namespace Test;

class CouponDiscountCalculator {

    function calcDiscount(Coupon $coupon, $amount): float
    {
        $discount = 0;
        if ($amount >= $coupon->minAmount && $amount <= $coupon->maxAmount) {
            $discount = $coupon->calculateDiscount($amount);

            if ($discount > $coupon->discountMaxAmount) {
                $discount = $coupon->discountMaxAmount;
            }
        }

        return $discount;
    }
}