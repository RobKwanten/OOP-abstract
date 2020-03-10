<?php
class gebruiker extends User
{
    public function __construct()
    {
        $this->setAccess(0);
    }
}