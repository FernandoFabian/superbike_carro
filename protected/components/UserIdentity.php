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
// 	public function authenticate()
// 	{
// 		$users=array(
// 			// username => password
// 			'demo'=>'demo',
// 			'admin'=>'admin',
// 		);
// 		if(!isset($users[$this->username]))
// 			$this->errorCode=self::ERROR_USERNAME_INVALID;
// 		elseif($users[$this->username]!==$this->password)
// 			$this->errorCode=self::ERROR_PASSWORD_INVALID;
// 		else
// 			$this->errorCode=self::ERROR_NONE;
// 		return !$this->errorCode;
// 	}
// }

public function authenticate(){

	
$username=strtolower($this->username);
$user2=Turista::model()->find('LOWER(tur_alias)=?',array($username));
$user=Personal::model()->find('LOWER(usu_email)=?',array($username));


if($user===null){
$this->errorCode=self::ERROR_USERNAME_INVALID;	
if($user2===null)
$this->errorCode=self::ERROR_USERNAME_INVALID;
else if(!$user2->validatePassword($this->password))
$this->errorCode=self::ERROR_PASSWORD_INVALID;
else
{
	Yii::app()->getSession()->add('tipo', 'TURISTA');
	$users=array('jonas');
	$this->username=$user2->tur_alias;
$this->errorCode=self::ERROR_NONE;
}
}

else if(!$user->validatePassword($this->password))
$this->errorCode=self::ERROR_PASSWORD_INVALID;
else{
// $this->_id=$user->tur_codigo;
Yii::app()->getSession()->add('tipo', 'PERSONAL');	
$this->username=$user->usu_email;
$this->errorCode=self::ERROR_NONE;
 

/*Consultamos los datos del usuario por el username ($user->username) */
// $info_usuario = Usuario::model()->find('LOWER(username)=?', array($user->username));
// /*En las vistas tendremos disponibles last_login y perfil pueden setear las que requieran */
// $this->setState('last_login',$info_usuario->last_login);
// $this->setState('perfil',$info_usuario->perfil);
 
// /*Actualizamos el last_login del usuario que se esta autenticando ($user->username) */
// $sql = "update usuario set last_login = now() where username='$user->username'";
// $connection = Yii::app() -> db;
// $command = $connection -> createCommand($sql);
// $command -> execute();
 
}
return $this->errorCode==self::ERROR_NONE;
}
 
// public function getId(){
// return $this->_id;
// }
 
}