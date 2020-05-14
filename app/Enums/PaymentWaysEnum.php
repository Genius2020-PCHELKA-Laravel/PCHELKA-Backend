<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static LiqPay()
 * @method static static PayPal()
 * @method static static Cash()
 */
final class PaymentWaysEnum extends Enum
{
    const LiqPay =   0;
    const PayPal =   1;
    const Cash = 2;
}
