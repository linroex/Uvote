<?php

class UsersDetail extends Eloquent{
    protected $table = 'users_detail';
    protected $guarded = ['uid'];
    public $primaryKey = 'uid';
    public $timestamps = true;

    public static function createUserData($uid, $avatar, $type, $email, $email_edu, $department){
        self::unguard();
        return self::create([
            'uid'=>$uid,
            'type'=>$type,
            'avatar'=>$avatar,
            'email'=>$email,
            'email_edu'=>$email_edu,
            'department'=>$department,
            'status'=>0
        ]);
    }
    public static function getUserData($uid){
        return self::find($uid);
    }
    public static function getUserAvatar($uid){
        return self::find($uid)->avatar;
    }
    public static function getUserStatus($uid){
        return self::find($uid)->status;
    }
    public static function enableUser($uid){
        self::where('uid','=',$uid)->update(['status'=>True]);
    }
}