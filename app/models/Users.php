<?php

class Users extends Eloquent{
	protected $table = 'users';
	protected $guarded = ['id'];
	public $timestamps = true;

    public static function findByFacebookID($fbid)
    {
		return self::where('fbid', '=', $fbid)->first();
    }

	public static function createUser($name, $fbid){
		return self::create([
			'name'=>$name,
			'fbid'=>$fbid
		])['id'];
	}

	public static function existsUser($fbid){
        return self::where('fbid', '=', $fbid)->count() > 0;
	}

	public static function getUserByUID($uid){
		return self::where('id','=',$uid)->first();
	}

    public function detail()
    {
        return $this->hasOne('UsersDetail');
    }
}
