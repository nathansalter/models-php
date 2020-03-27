<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SendAction extends \OpenActive\Models\SchemaOrg\TransferAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SendAction";
    }

    public static function fieldList() {
        $fields = [
            "recipient" => "recipient",
            "deliveryMethod" => "deliveryMethod",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A sub property of participant. The participant who is at the receiving end of the action.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Person
     */
    protected $recipient;

    /**
     * A sub property of instrument. The method of delivery.
     *
     *
     * @var \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    protected $deliveryMethod;

    /**
     * @return \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Person
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Organization|\OpenActive\Models\SchemaOrg\ContactPoint|\OpenActive\Models\SchemaOrg\Audience|\OpenActive\Models\SchemaOrg\Person $recipient
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRecipient($recipient)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Organization",
            "\OpenActive\Models\SchemaOrg\ContactPoint",
            "\OpenActive\Models\SchemaOrg\Audience",
            "\OpenActive\Models\SchemaOrg\Person",
        );

        $recipient = self::checkTypes($recipient, $types);

        $this->recipient = $recipient;
    }

    /**
     * @return \OpenActive\Enums\SchemaOrg\DeliveryMethod|null
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * @param \OpenActive\Enums\SchemaOrg\DeliveryMethod|null $deliveryMethod
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDeliveryMethod($deliveryMethod)
    {
        $types = array(
            "\OpenActive\Enums\SchemaOrg\DeliveryMethod",
            "null",
        );

        $deliveryMethod = self::checkTypes($deliveryMethod, $types);

        $this->deliveryMethod = $deliveryMethod;
    }

}
