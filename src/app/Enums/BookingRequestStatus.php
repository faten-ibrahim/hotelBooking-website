<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Approved()
 * @method static static Rejected()
 */
final class BookingRequestStatus extends Enum
{
    const Approved = 1;
    const Rejected = 2;
}
