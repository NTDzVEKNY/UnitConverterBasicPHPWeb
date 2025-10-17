<?php
/**
 * @project UnitConverter
 * @author  NTDzVEKNY
 * @email  nguyentrongdung241024@gmail.com
 * @date    10/16/2025
 * @time    3:51 PM
 */

declare(strict_types=1);

namespace Constant;

class Length
{

    public final const int MILLIMETER = 0;

    public final const int CENTIMETER = 1;

    public final const int METER = 2;

    public final const int KILOMETER = 3;

    public final const int INCH = 4;

    public final const int FOOT = 5;

    public final const int YARD = 6;

    public final const int MILE = 7;

    public final const array TYPES
        = [
            self::MILLIMETER => 'mm',
            self::CENTIMETER => 'cm',
            self::METER      => 'm',
            self::KILOMETER  => 'km',
            self::INCH       => 'in',
            self::FOOT       => 'ft',
            self::YARD       => 'yd',
            self::MILE       => 'mi',
        ];

    public final const array RATES
        = [
            self::MILLIMETER => 1,
            self::CENTIMETER => 10,
            self::METER      => 1000,
            self::KILOMETER  => 1000000,
            self::INCH       => 25.4,
            self::FOOT       => 304.8,
            self::YARD       => 914.4,
            self::MILE       => 1609344,
        ];

}
