<?php
/**
 * @project UnitConverter
 * @author  NTDzVEKNY
 * @email  nguyentrongdung241024@gmail.com
 * @date    10/16/2025
 * @time    4:16 PM
 */

declare(strict_types=1);

namespace Object;

use Constant\Temperature as TemperatureConstant;

class Temperature
{

    private float $temperature;

    private int $type;

    public function __construct(float $temperature, int $type)
    {
        $this->temperature = $temperature;
        $this->type = $type;
    }

    public function getCelsius(): float
    {
        if ($this->type === TemperatureConstant::FAHRENHEIT) {
            return ($this->temperature - 32) * 5 / 9;
        }
        if ($this->type === TemperatureConstant::KELVIN) {
            return $this->temperature - 273.15;
        }
        return $this->temperature;
    }

    public function getFahrenheit(): float
    {
        if ($this->type === TemperatureConstant::CELSIUS) {
            return $this->temperature * 9 / 5 + 32;
        }
        if ($this->type === TemperatureConstant::KELVIN) {
            return ($this->temperature - 273.15) * 9 / 5 + 32;
        }
        return $this->temperature;
    }

    public function getKelvin(): float
    {
        if ($this->type === TemperatureConstant::CELSIUS) {
            return $this->temperature + 273.15;
        }
        if ($this->type === TemperatureConstant::FAHRENHEIT) {
            return ($this->temperature - 32) * 5 / 9 + 273.15;
        }
        return $this->temperature;
    }

    public function setTemperature(float $temperature, int $type): void
    {
        $this->temperature = $temperature;
        $this->type = $type;
    }

    public function convertTo(int $to): float
    {
        return match ($to) {
            TemperatureConstant::CELSIUS => $this->getCelsius(),
            TemperatureConstant::FAHRENHEIT => $this->getFahrenheit(),
            TemperatureConstant::KELVIN => $this->getKelvin(),
        };
    }

}
