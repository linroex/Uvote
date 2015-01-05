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
	public static function getUserByUID($uid){
		return self::where('id','=',$uid)->first();
	}


}