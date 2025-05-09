<?php

namespace App\Service;

class UtilityService
{

    public function extractNumericIds(?array $array): string
    {
        if (is_array($array)) {
            $ids = [];
            foreach ($array as $item) 
            {
                $parts = explode('/', $item);
                $id = end($parts);
                if (is_numeric($id)) {
                    $ids[] = $id;
                }  
            }
        }

        return implode(',', $ids);
    }

}