<?php

namespace Smsplateform\Client;

/**
 * Initiates the authentication process
 */
class Auth
{
	private static $token = null;
	
	/**
	 * Initiates the authentication process
	 * @param string $username
	 * @param string $password
	 */
	public static function Init($username=null, $password=null){
		if ( is_null($password) || is_null($username) ) {
			throw new \Exception("Authentication failure. Please provide your username and password");
		}
		self::$token = "$username:$password";
	}


	public static function Token()
	{
		return self::$token;
	}
}