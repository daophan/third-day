<?php

use Phalcon\Mvc\Model;

class User extends Model
{
    public $id;

    public $email;

    public $facebook;

    public $phone;

    public $complete_profile;

    function onConstruct()
	{
		$this->id = rand(1, 1000);
		$this->email = '';
		$this->facebook = '';
		$this->phone = '';
		$this->complete_profile = false;
	}

	function saveToLocalStorage()
	{
		return "<script>
		localStorage.setItem('id', '$this->id');
		localStorage.setItem('email', '$this->email');
		localStorage.setItem('facebook', '$this->facebook');
		localStorage.setItem('phone', '$this->phone');
		localStorage.setItem('complete_profile','$this->complete_profile');
		</script>";
	}
}
