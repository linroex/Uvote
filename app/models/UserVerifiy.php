<?php
class UserVerifiy extends Eloquent{
    protected $table = 'users_verification';
    protected $guarded = ['id'];

    public static function createToken($uid){
        $user = UsersDetail::getUserData($uid);
        if($user == NULL){
            return 'User not found';
        }else{
            $token = Hash::make($uid . $user->email_edu . time());
            $existToken = self::whereRaw('uid = ? and enable = 1',['uid'=>$uid]);
            DB::transaction(function() use (&$token, &$existToken, &$uid){
                if($existToken->count() > 0){
                    $existToken->update(['enable'=>False]);
                }
                self::create([
                    'uid'=>$uid,
                    'token'=>$token,
                    'enable'=>True
                ]);
            });
            
            return $token;
        }
    }
    public static function getUserToken($uid){
        return self::whereRaw('uid = ? and enable = 1', ['uid'=>$uid])->limit(1)->get()[0]->token;
    }
    public static function checkToken($token){
        $dbUserToken = self::whereRaw('token = ? and enable = 1',['token'=>$token]);
        if($dbUserToken->count() == 1){
            $uid = $dbUserToken->limit(1)->get()[0]->uid;
            self::setTokenDisable($token);
            return $uid;
        }else{
            // not found token
            return False;
        }
    }
    public static function setTokenDisable($token){
        return self::where('token','=',$token)->update(['enable'=>False]);
    }
}