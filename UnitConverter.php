<?php
/**
 * @project UnitConverter
 * @author  NTDzVEKNY
 * @email  nguyentrongdung241024@gmail.com
 * @date    10/16/2025
 * @time    3:24 PM
 */

require_once __DIR__.'/vendor/autoload.php';

$result = '';
$activeTab = 'Length';

$value = '';
$from = '';
$to = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($_POST['type']) {
        case 'length':
            $value = (float)$_POST['length_value'];
            $from = (int)$_POST['length_from'];
            $to = (int)$_POST['length_to'];

            $length = new Object\Length($value, $from);
            $result = $value.' '.Constant\Length::TYPES[$from].' = '.$length->convertTo($to).' '
                .Constant\Length::TYPES[$to];
            break;
        case 'weight':
            $value = (float)$_POST['weight_value'];
            $from = (int)$_POST['weight_from'];
            $to = (int)$_POST['weight_to'];

            $weight = new Object\Weight($value, $from);
            $result = $value.' '.Constant\Weight::TYPES[$from].' = '.$weight->convertTo($to).' '
                .Constant\Weight::TYPES[$to];
            break;
        case 'temperature':
            $value = (float)$_POST['temperature_value'];
            $from = (int)$_POST['from'];
            $to = (int)$_POST['temperature_to'];

            $temperature = new Object\Temperature($value, $from);
            $result = $value.' '.Constant\Temperature::TYPES[$from].' = '.$temperature->convertTo($to).' '
                .Constant\Temperature::TYPES[$to];
            break;
    }
}
