<?php

namespace duncan3dc\Sonos\Services;

/**
 * Representation of a Spotify track.
 */
class SpotifyTrack extends AbstractSpotify
{
    /**
     * Create a Spotify track object.
     *
     * @param int $id The ID of Spotify resource
     */
    public function __construct($id)
    {
        parent::__construct($id, "track");
    }

    /**
     * Get the URI for this track.
     *
     * @return string
     */
    public function getUri()
    {
        return "x-sonos-spotify:" . urlencode($this->uri);
    }
}
