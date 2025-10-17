<?php
/**
 * @project UnitConverter
 * @author  NTDzVEKNY
 * @email  nguyentrongdung241024@gmail.com
 * @date    10/16/2025
 * @time    4:10 PM
 */

declare(strict_types=1);

namespace Constant;

class Temperature
{

    public final const int CELSIUS = 0;

    public final const int FAHRENHEIT = 1;

    public final const int KELVIN = 2;

    public final const array TYPES
        = [
            self::CELSIUS    => '°C',
            self::FAHRENHEIT => '°F',
            self::KELVIN     => 'K',
        ];

}
