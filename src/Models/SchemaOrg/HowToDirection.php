<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HowToDirection extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HowToDirection";
    }

    public static function fieldList() {
        $fields = [
            "duringMedia" => "duringMedia",
            "beforeMedia" => "beforeMedia",
            "prepTime" => "prepTime",
            "tool" => "tool",
            "performTime" => "performTime",
            "totalTime" => "totalTime",
            "supply" => "supply",
            "afterMedia" => "afterMedia",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A media object representing the circumstances while performing this direction.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $duringMedia;

    /**
     * A media object representing the circumstances before performing this direction.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $beforeMedia;

    /**
     * The length of time it takes to prepare the items to be used in instructions or a direction, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     *
     *
     * @var DateInterval|null
     */
    protected $prepTime;

    /**
     * A sub property of instrument. An object used (but not consumed) when performing instructions or a direction.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HowToTool|string
     */
    protected $tool;

    /**
     * The length of time it takes to perform instructions or a direction (not including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     *
     *
     * @var DateInterval|null
     */
    protected $performTime;

    /**
     * The total time required to perform instructions or a direction (including time to prepare the supplies), in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
     *
     *
     * @var DateInterval|null
     */
    protected $totalTime;

    /**
     * A sub-property of instrument. A supply consumed when performing instructions or a direction.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\HowToSupply
     */
    protected $supply;

    /**
     * A media object representing the circumstances after performing this direction.
     *
     *
     * @var string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    protected $afterMedia;

    /**
     * @return string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    public function getDuringMedia()
    {
        return $this->duringMedia;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MediaObject $duringMedia
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDuringMedia($duringMedia)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\MediaObject",
        );

        $duringMedia = self::checkTypes($duringMedia, $types);

        $this->duringMedia = $duringMedia;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    public function getBeforeMedia()
    {
        return $this->beforeMedia;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MediaObject $beforeMedia
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBeforeMedia($beforeMedia)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\MediaObject",
        );

        $beforeMedia = self::checkTypes($beforeMedia, $types);

        $this->beforeMedia = $beforeMedia;
    }

    /**
     * @return DateInterval|null
     */
    public function getPrepTime()
    {
        return $this->prepTime;
    }

    /**
     * @param DateInterval|null $prepTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPrepTime($prepTime)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $prepTime = self::checkTypes($prepTime, $types);

        $this->prepTime = $prepTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\HowToTool|string
     */
    public function getTool()
    {
        return $this->tool;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HowToTool|string $tool
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTool($tool)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\HowToTool",
            "string",
        );

        $tool = self::checkTypes($tool, $types);

        $this->tool = $tool;
    }

    /**
     * @return DateInterval|null
     */
    public function getPerformTime()
    {
        return $this->performTime;
    }

    /**
     * @param DateInterval|null $performTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPerformTime($performTime)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $performTime = self::checkTypes($performTime, $types);

        $this->performTime = $performTime;
    }

    /**
     * @return DateInterval|null
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }

    /**
     * @param DateInterval|null $totalTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setTotalTime($totalTime)
    {
        $types = array(
            "DateInterval",
            "null",
        );

        $totalTime = self::checkTypes($totalTime, $types);

        $this->totalTime = $totalTime;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\HowToSupply
     */
    public function getSupply()
    {
        return $this->supply;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\HowToSupply $supply
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setSupply($supply)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\HowToSupply",
        );

        $supply = self::checkTypes($supply, $types);

        $this->supply = $supply;
    }

    /**
     * @return string|\OpenActive\Models\SchemaOrg\MediaObject
     */
    public function getAfterMedia()
    {
        return $this->afterMedia;
    }

    /**
     * @param string|\OpenActive\Models\SchemaOrg\MediaObject $afterMedia
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setAfterMedia($afterMedia)
    {
        $types = array(
            "string",
            "\OpenActive\Models\SchemaOrg\MediaObject",
        );

        $afterMedia = self::checkTypes($afterMedia, $types);

        $this->afterMedia = $afterMedia;
    }

}
