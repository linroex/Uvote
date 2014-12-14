<?php

class Users extends Eloquent{
	protected $table = 'users';
	protected $guarded = ['id'];
	public $timestamps = true;

	public static function createUser($name, $fbid){
		return self::create([
			'name'=>$name,
			'fbid'=>$fbid
		])['id'];
	}
	public static function existsUser($fbid){
		return (Boolean)(self::where('fbid','=',$fbid)->count());
	}
	public static function getUser($fbid){
		return self::where('fbid','=',$fbid)->first();

	}
	public static function checkUserPasswd($username, $password){
		try{
			if(Hash::check($password, self::where('username','=',$username)->first()->password)){
				return true;
			}else{
				return false;
			}	
		}catch(ErrorException $e){
			return false;
		}
	}

	
}