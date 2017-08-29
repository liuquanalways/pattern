<?php
/**
 * Created by PhpStorm.
 * User: liuquan
 * Date: 2017/8/29
 * Time: 14:19
 */

namespace DesignPattern\MediatorPattern;


class User
{

    /** @var string $_name */
    private $_name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->_name = $name;
    }

    public function __construct(string $name)
    {
        $this->_name = $name;
    }

    public function sendMessage(string $message): void
    {
        ChatRoom::showMessage($this, $message);
    }

}