<?php
/**
 * @project UnitConverter
 * @author  NTDzVEKNY
 * @email  nguyentrongdung241024@gmail.com
 * @date    10/16/2025
 * @time    3:41 PM
 */

declare(strict_types=1);

namespace Object;

use Constant\Length as LengthConstant;

class Length
{

    private float $length;

    public function __construct(float $length, int $type)
    {
        $this->length = $this->convertToMillimeter($length, $type);
    }

    private function convertToMillimeter($length, $type): float
    {
        $rate = LengthConstant::RATES[$type];
        return $length * $rate;
    }

    public function getMillimeter(): float
    {
        return $this->length;
    }

    public function getCentimeter(): float
    {
        return $this->length / LengthConstant::RATES[LengthConstant::CENTIMETER];
    }

    public function getMeter(): float
    {
        return $this->length / LengthConstant::RATES[LengthConstant::METER];
    }

    public function getKilometer(): float
    {
        return $this->length / LengthConstant::RATES[LengthConstant::KILOMETER];
    }

    public function getInch(): float
    {
        return $this->length / LengthConstant::RATES[LengthConstant::INCH];
    }

    public function getFoot(): float
    {
        return $this->length / LengthConstant::RATES[LengthConstant::FOOT];
    }

    public function getYard(): float
    {
        return $this->length / LengthConstant::RATES[LengthConstant::YARD];
    }

    public function getMile(): float
    {
        return $this->length / LengthConstant::RATES[LengthConstant::MILE];
    }

    public function setLength(float $length, int $type): void
    {
        $this->length = $this->convertToMillimeter($length, $type);
    }

    public function convertTo(int $to): float
    {
        return match ($to) {
            LengthConstant::MILLIMETER => $this->getMillimeter(),
            LengthConstant::CENTIMETER => $this->getCentimeter(),
            LengthConstant::METER => $this->getMeter(),
            LengthConstant::KILOMETER => $this->getKilometer(),
            LengthConstant::INCH => $this->getInch(),
            LengthConstant::FOOT => $this->getFoot(),
            LengthConstant::YARD => $this->getYard(),
            LengthConstant::MILE => $this->getMile(),
        };
    }

}
