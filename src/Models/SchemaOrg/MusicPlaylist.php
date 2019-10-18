<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class MusicPlaylist extends \OpenActive\Models\SchemaOrg\CreativeWork
{
    /**
     * The number of tracks in this album or playlist.
     *
     *
     * @var int|null
     */
    protected $numTracks;

    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\MusicRecording
     */
    protected $track;

    /**
     * A music recording (track)&#x2014;usually a single song.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\MusicRecording
     */
    protected $tracks;

    /**
     * @return int|null
     */
    public function getNumTracks()
    {
        return $this->numTracks;
    }

    /**
     * @param int|null $numTracks
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setNumTracks($numTracks)
    {
        $types = array(
            "int",
            "null",
        );

        $numTracks = self::checkTypes($numTracks, $types);

        $this->numTracks = $numTracks;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\MusicRecording
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\ItemList|\OpenActive\Models\SchemaOrg\MusicRecording $track
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setTrack($track)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\ItemList",
            "\OpenActive\Models\SchemaOrg\MusicRecording",
        );

        $track = self::checkTypes($track, $types);

        $this->track = $track;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\MusicRecording
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\MusicRecording $tracks
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setTracks($tracks)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\MusicRecording",
        );

        $tracks = self::checkTypes($tracks, $types);

        $this->tracks = $tracks;
    }

}