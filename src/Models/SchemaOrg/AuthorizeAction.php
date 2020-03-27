<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class AuthorizeAction extends \OpenActive\Models\SchemaOrg\AllocateAction
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:AuthorizeAction";
    }

    public static function fieldList() {
        $fields = [
            "recipient" => "recipient",
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

}
