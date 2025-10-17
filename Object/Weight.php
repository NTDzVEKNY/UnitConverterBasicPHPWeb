<?php
/**
 * @project UnitConverter
 * @author  NTDzVEKNY
 * @email  nguyentrongdung241024@gmail.com
 * @date    10/16/2025
 * @time    4:13 PM
 */

declare(strict_types=1);

namespace Object;

use Constant\Weight as WeightConstant;

class Weight
{

    private float $weight;

    public function __construct(float $weight, int $type)
    {
        $this->weight = $this->convertToMilligram($weight, $type);
    }

    private function convertToMilligram($weight, $type): float
    {
        $rate = WeightConstant::RATES[$type];
        return $weight * $rate;
    }

    public function getMilligram(): float
    {
        return $this->weight;
    }

    public function getGram(): float
    {
        return $this->weight / WeightConstant::RATES[WeightConstant::GRAM];
    }

    public function getKilogram(): float
    {
        return $this->weight / WeightConstant::RATES[WeightConstant::KILOGRAM];
    }

    public function getOunce(): float
    {
        return $this->weight / WeightConstant::RATES[WeightConstant::OUNCE];
    }

    public function getPound(): float
    {
        return $this->weight / WeightConstant::RATES[WeightConstant::POUND];
    }

    public function setWeight(float $weight, int $type): void
    {
        $this->weight = $this->convertToMilligram($weight, $type);
    }

    public function convertTo(int $to): float
    {
        return match ($to) {
            WeightConstant::MILLIGRAM => $this->getMilligram(),
            WeightConstant::GRAM => $this->getGram(),
            WeightConstant::KILOGRAM => $this->getKilogram(),
            WeightConstant::OUNCE => $this->getOunce(),
            WeightConstant::POUND => $this->getPound(),
        };
    }

}
