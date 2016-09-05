<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	
	public function authenticate()
	{
		$username = strtolower($this->username);
		$user = User::model()->find('LOWER(username)=?', array($username));
		if(isset($this->password) && isset($username)){
			if($user && $user->validatePassword($this->password)){
				if($user->level){
					$this->_id = $user->id_user;
					$this->username = $user->username;
					$this->setState('level', $user->level);
					$this->setState('name', $user->nama_lengkap);
					$this->errorCode = self::ERROR_NONE;
				}/* else{
					$this->_id = $user->id_user;
					$this->username = $user->username;
					$this->setState('level', 0);
					$this->errorCode = self::ERROR_NONE;
				} */
			} else {
				$this->errorCode=self::ERROR_USERNAME_INVALID;
			}
		}
	   	return $this->errorCode == self::ERROR_NONE;
	}
	
	public function getId()
	{
		return $this->_id;
	}
}