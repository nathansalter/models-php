<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Role extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Role";
    }

    public static function fieldList() {
        $fields = [
            "endDate" => "endDate",
            "namedPosition" => "namedPosition",
            "startDate" => "startDate",
            "roleName" => "roleName",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The end date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
     *
     *
     * @var Date|DateTime|null
     */
    protected $endDate;

    /**
     * A position played, performed or filled by a person or organization, as part of an organization. For example, an athlete in a SportsTeam might play in the position named 'Quarterback'.
     *
     *
     * @var string
     */
    protected $namedPosition;

    /**
     * The start date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
     *
     *
     * @var Date|DateTime|null
     */
    protected $startDate;

    /**
     * A role played, performed or filled by a person or organization. For example, the team of creators for a comic book might fill the roles named 'inker', 'penciller', and 'letterer'; or an athlete in a SportsTeam might play in the position named 'Quarterback'.
     *
     *
     * @var string
     */
    protected $roleName;

    /**
     * @return Date|DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param Date|DateTime|null $endDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setEndDate($endDate)
    {
        $types = array(
            "Date",
            "DateTime",
            "null",
        );

        $endDate = self::checkTypes($endDate, $types);

        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getNamedPosition()
    {
        return $this->namedPosition;
    }

    /**
     * @param string $namedPosition
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setNamedPosition($namedPosition)
    {
        $types = array(
            "string",
        );

        $namedPosition = self::checkTypes($namedPosition, $types);

        $this->namedPosition = $namedPosition;
    }

    /**
     * @return Date|DateTime|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param Date|DateTime|null $startDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStartDate($startDate)
    {
        $types = array(
            "Date",
            "DateTime",
            "null",
        );

        $startDate = self::checkTypes($startDate, $types);

        $this->startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * @param string $roleName
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setRoleName($roleName)
    {
        $types = array(
            "string",
        );

        $roleName = self::checkTypes($roleName, $types);

        $this->roleName = $roleName;
    }

}
