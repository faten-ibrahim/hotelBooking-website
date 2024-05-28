<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static Double()
 * @method static static Suite()
 */
final class RoomType extends Enum
{
    const Single = 1;
    const Double = 2;
    const Suite  = 3;
}
