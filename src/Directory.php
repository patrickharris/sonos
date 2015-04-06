<?php

namespace duncan3dc\Sonos;

/**
 * Represents a shared directory.
 */
class Directory
{
    /**
     * @var string $filesystem The full path to the share on the local filesystem.
     */
    protected $filesystem;

    /**
     * @var string $share The full path to the share (including the hostname).
     */
    protected $share;

    /**
     * @var string $directory The name of the directory (to be appended to both $filesystem and $share).
     */
    protected $directory;


    /**
     * Create a Directory instance to represent a file share.
     *
     * @param string $filesystem The full path to the share on the local filesystem.
     * @param string $share The full path to the share (including the hostname).
     * @param string $directory The name of the directory (to be appended to both $filesystem and $share).
     */
    public function __construct($filesystem, $share, $directory)
    {
        $filesystem = rtrim($filesystem, "/");
        if (!is_dir($filesystem)) {
            throw new \InvalidArgumentException("Invalid directory: {$filesystem}");
        }

        $this->filesystem = $filesystem;
        $this->share = rtrim($share, "/");
        $this->directory = trim($directory, "/");
    }


    /**
     * Get the full path to the directory on the file share.
     *
     * @return string
     */
    public function getSharePath()
    {
        return "{$this->share}/{$this->directory}";
    }


    /**
     * Get the full path to the directory on the local filesystem.
     *
     * @return string
     */
    public function getFilesystemPath()
    {
        return "{$this->filesystem}/{$this->directory}";
    }
}
