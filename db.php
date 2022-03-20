<?php

class db {
    private $mysql;

    function __construct()
    {
        $this->mysql = new mysqli('localhost', 'root', 'password', 'db') or die('problem');
    }
}