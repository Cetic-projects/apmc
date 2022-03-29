<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserRoles extends Enum
{
    const SuperAdmin =   'super_admin';
    const Admin =   'admin';
}
