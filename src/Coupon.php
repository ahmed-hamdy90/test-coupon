<?php

namespace Test;

abstract class Coupon {

    public $type; // become useless

    public $minAmount;

    public $maxAmount;

    public $discountType;

    public $discountAmount;

    public $discountPercentage;

    public $discountMaxAmount;

    public $discountUnit;

    abstract function calculateDiscount($amount);
}