<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AmusementPark extends \OpenActive\Models\SchemaOrg\EntertainmentBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AmusementPark";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
