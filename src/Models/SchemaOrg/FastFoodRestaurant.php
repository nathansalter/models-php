<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class FastFoodRestaurant extends \OpenActive\Models\SchemaOrg\FoodEstablishment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:FastFoodRestaurant";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
