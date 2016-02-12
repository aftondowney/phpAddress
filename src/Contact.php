<?php

class Contact
{
		private $name;
		private $phone;
		private $address;

		function __construct($name, $phone, $address)
		{
				$this->name = $name;
				$this->phone = $phone;
				$this->address = $address;
		}

		function setName($name)
		{
				$this->name = $name;
		}

		function getName()
		{
				return $this->name;
		}

		function setphone($phone)
		{
				$this->phone = $phone;
		}

		function getphone()
		{
				return $this->phone;
		}

		function setaddress($address)
		{
				$this->address = $address;
		}

		function getaddress()
		{
				return $this->address;
		}

		function save()
		{
				array_push($_SESSION['list_of_contacts'], $this);
		}

		static function getAll()
		{
				return $_SESSION['list_of_contacts'];
		}

		static function deleteAll()
		{
				$_SESSION['list_of_contacts'] = array();
		}






}
?>