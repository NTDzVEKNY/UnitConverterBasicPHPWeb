<?php
/**
 * @project UnitConverter
 * @author  NTDzVEKNY
 * @email  nguyentrongdung241024@gmail.com
 * @date    10/16/2025
 * @time    4:09 PM
 */

declare(strict_types=1);

namespace Constant;

class Weight
{

    public final const int MILLIGRAM = 0;

    public final const int GRAM = 1;

    public final const int KILOGRAM = 2;

    public final const int OUNCE = 3;

    public final const int POUND = 4;

    public final const array RATES
        = [
            self::MILLIGRAM => 1,
            self::GRAM      => 1000,
            self::KILOGRAM  => 1000000,
            self::OUNCE     => 28349.523125,
            self::POUND     => 453592.37,
        ];

    public final const array TYPES
        = [
            self::MILLIGRAM => 'mg',
            self::GRAM      => 'g',
            self::KILOGRAM  => 'kg',
            self::OUNCE     => 'oz',
            self::POUND     => 'lb',
        ];

}
