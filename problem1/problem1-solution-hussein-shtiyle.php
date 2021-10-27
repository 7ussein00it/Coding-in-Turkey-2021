<?php
$data = file_get_contents('inputs.json');
$fridgeItems = json_decode($data)->fridge;
$ingredients = json_decode($data)->ingredients;

echo validateRecipe($fridgeItems, $ingredients);

function validateRecipe($fridge, $items)
{
    foreach ($items as $item) {
        if (!whereMyFood($fridge, $item)) {
            return "False";
        }
    }
    return "True";
}
function whereMyFood($fridge, $item)
{
    foreach ($fridge as $fridgeItem) {
        if (trim(strtolower($fridgeItem)) == trim(strtolower($item))) {
            return true;
        }
    }
    return false;
}