<?php

namespace OpenActive\Models\OA;

/**
 *
 */
class DynamicPayment extends \OpenActive\Models\OA\Payment
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "DynamicPayment";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
