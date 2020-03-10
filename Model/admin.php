<?php
class admin extends User
{
    public function __construct()
    {
        $this->setAccess(1);
    }
}