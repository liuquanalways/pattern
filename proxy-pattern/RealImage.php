<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 9:24
 */

namespace DesignPattern\ProxyPattern;


class RealImage implements Image
{
    /** @var string $_filename */
    private $_filename;

    /**
     * RealImage constructor
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        $this->_filename = $filename;
        $this->_loadFromDisk($filename);
    }

    /**
     * Display Image
     */
    public function display(): void
    {
        echo "\nDisplaying {$this->_filename}.";
    }

    /**
     * @param string $filename
     */
    private function _loadFromDisk($filename)
    {
        echo "\nLoading {$filename} from disk.";
    }

}