<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class MotorcycleDealer extends \OpenActive\Models\SchemaOrg\AutomotiveBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:MotorcycleDealer";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
