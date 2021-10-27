<?php
$data = file_get_contents('inputs.json');
$fridgeItems = json_decode($data)->fridge;
$ingredients = json_decode($data)->ingredients;

echo validateRecipeWithQuantity($fridgeItems, $ingredients);

function validateRecipeWithQuantity($fridge, $ingradients)
{
    $count = 0;
    foreach ($ingradients as $key => $item_v) {
        foreach ($fridge as $fi_key => $fridgeItem_v) {
            if ($key == $fi_key) {
                if ($fridgeItem_v >= $item_v) {
                    $count++;
                }
            }
        }
    }

    if ($count == count((array)$ingradients)) {
        return "True";
    } else {
        return "False";
    }
}