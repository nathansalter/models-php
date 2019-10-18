<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class TechArticle extends \OpenActive\Models\SchemaOrg\Article
{
    /**
     * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
     *
     *
     * @var string
     */
    protected $proficiencyLevel;

    /**
     * Prerequisites needed to fulfill steps in article.
     *
     *
     * @var string
     */
    protected $dependencies;

    /**
     * @return string
     */
    public function getProficiencyLevel()
    {
        return $this->proficiencyLevel;
    }

    /**
     * @param string $proficiencyLevel
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setProficiencyLevel($proficiencyLevel)
    {
        $types = array(
            "string",
        );

        $proficiencyLevel = self::checkTypes($proficiencyLevel, $types);

        $this->proficiencyLevel = $proficiencyLevel;
    }

    /**
     * @return string
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }

    /**
     * @param string $dependencies
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDependencies($dependencies)
    {
        $types = array(
            "string",
        );

        $dependencies = self::checkTypes($dependencies, $types);

        $this->dependencies = $dependencies;
    }

}