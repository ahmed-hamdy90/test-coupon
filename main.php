<?php

require __DIR__ . '/vendor/autoload.php';

use Test\CouponDiscountCalculator;
use Test\FixedAbsoluteCoupon;
use Test\FixedSlabCoupon;

$couponDiscountCalculator = new CouponDiscountCalculator();

$fixedAbsoluteCoupon = new FixedAbsoluteCoupon();
$fixedAbsoluteCoupon->maxAmount = 1000;
$fixedAbsoluteCoupon->minAmount = 500;
$fixedAbsoluteCoupon->discountMaxAmount = 300;
$fixedAbsoluteCoupon->discountAmount = 100;

echo $couponDiscountCalculator->calcDiscount($fixedAbsoluteCoupon, 700);
echo PHP_EOL;

$fixedSlabCoupon = new FixedSlabCoupon();
$fixedSlabCoupon->maxAmount = 1000;
$fixedSlabCoupon->minAmount = 500;
$fixedSlabCoupon->discountMaxAmount = 300;
$fixedSlabCoupon->discountAmount = 50;
$fixedSlabCoupon->discountUnit = 10;

echo $couponDiscountCalculator->calcDiscount($fixedSlabCoupon, 700);
echo PHP_EOL;