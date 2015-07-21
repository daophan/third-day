<?php

use Phalcon\Mvc\Model;

class Users extends Model
{
    public $id;

    public $email;

    public $facebook;

    public $phone;

    function __construct()
	{
		$this->id = rand(1, 100);
		$this->email = '';
		$this->facebook = '';
		$this->phone = '';
	}
}
