<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		
		$oDbConnection = Yii::app()->db; // Getting database connection (config/main.php has to set up database
			// Here you will use your complex sql query using a string or other yii ways to create your query
		$oCommand = $oDbConnection->createCommand('SELECT * FROM usuarios where correo=:correo and contrasena=:contrasena');
			// Bind the parameter
		$oCommand->bindParam(':correo',$this->username, PDO::PARAM_STR);
		$oCommand->bindParam(':contrasena', $this->password, PDO::PARAM_STR);

		$oCDbDataReader = $oCommand->queryAll();
		
	/*	if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;*/
		if(sizeof($oCDbDataReader)<=0)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}