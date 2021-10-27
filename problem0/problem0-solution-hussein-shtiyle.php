<?php
$data = file_get_contents('inputs.json');
$itemslist = json_decode($data)->fridge;
$item = "apple";

echo whereMyFood($itemslist, $item);
function whereMyFood($fridge, $item)
{
    foreach ($fridge as $index => $fridgeItem) {

        if (trim(strtolower($fridgeItem)) == trim(strtolower($item))) {
            return $index;
        }
        return -1;
    }
}