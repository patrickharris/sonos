<?php

namespace duncan3dc\Sonos\Services;

/**
 * Representation of a Spotify album.
 */
class SpotifyAlbum extends AbstractSpotify
{
    /**
     * Create a Spotify album object.
     *
     * @param int $id The ID of Spotify resource
     */
    public function __construct($id)
    {
        parent::__construct($id, "album");
    }

    /**
     * Get the URI for this track.
     *
     * @return string
     */
    public function getUri()
    {
        return "x-rincon-cpcontainer:" . urlencode($this->uri);
    }
}
