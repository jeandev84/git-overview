<?php
namespace Framework;


/**
 * Class FileSytem
 * @package Framework
 */
class FileSytem
{
    /**
     * @var string
     */
    private $root;

    /**
     * FileSytem constructor.
     * @param string $root
     */
    public function __construct(string $root)
    {
        $this->root = trim($root, '/');
    }

    /**
     * @param string $path
     * @return string
     */
    public function to(string $path)
    {
        return sprintf('%s%s%s',
            $this->root,
            DIRECTORY_SEPARATOR,
            $this->getTransformedPath($path)
        );
    }

    /**
     * @param string $path
     * @return mixed
     */
    private function getTransformedPath(string $path)
    {
         return str_replace(['/', '\\'], DIRECTORY_SEPARATOR, trim($path, '/'));
    }
}