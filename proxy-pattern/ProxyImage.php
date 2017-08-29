<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 9:29
 */

namespace DesignPattern\ProxyPattern;


class ProxyImage implements Image
{
    /** @var RealImage $_realImage */
    private $_realImage;

    /** @var string $_filename */
    private $_filename;

    /**
     * ProxyImage constructor.
     * @param string $filename
     */
    public function __construct(string $filename)
    {
        $this->_filename = $filename;
    }

    /**
     * Display image
     */
    public function display(): void
    {
        if (is_null($this->_realImage)) {
            $this->_realImage = new RealImage($this->_filename);
        }

        $this->_realImage->display();
    }
}