<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Available()
 * @method static static Booked()
 * @method static static Pending()
 */
final class RoomStatus extends Enum
{
    const Available = 1;
    const Booked = 2;
    const Pending = 3;
}
