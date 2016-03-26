<?php

class User implements JsonSerializable{
	private $userName, $name, $loggedIn = false;
	private $personalData;
	
	/**
	 * returns thw name of the user
	 */
	public function getName(){
		return $this->name;
	}
	
	/**
	 * returns the username of the user
	 */
	public function getUserName(){
		return $this->userName;
	}
	
	/**
	 * returns the userId of the user
	 */
	public function getUserId(){
		return $this->userId;
	}
	
	/**
	 * returns the logged in status of the user
	 */
	public function isLoggedIn(){
		return $this->loggedIn;
	}
	
	/**
	 * constructs a new user object
	 * requires username and password through post method
	 */
	public function __construct(){
		
		$dbConnection = DB::getInstance();
		
		$userName = Input::get("userName");
		
		$dbConnection->get("user", array("userName = '$userName' "));
		
		if($dbConnection->count()==1){
			$this->loggedIn = true;
			$this->userName = $dbConnection->getFirst()->userName;
			$this->name = $dbConnection->getFirst()->name;
			//get personal data for the user
		}
		
	}
	
	
	
	/**
	 * 
	 */
	public function JsonSerialize()
	{
		$vars = get_object_vars($this);
		return $vars;
	}
}
?>