<?php
class UserController extends Controller{
    public function register(){
        $token = Session::get('fb_token');
        Facebook::setAccessToken($token);
        
        DB::transaction(function(){
            $user = Facebook::object('/me')->get();
            $uid = Users::createUser($user['name'],$user['id']);
            $avatar = Facebook::object('/me/picture?redirect=false')->get()['url'];

            if(!isset($user['email'])){
                $user['email'] = $user['id'] . '@facebook.com';
            }

            UsersDetail::createUserData($uid, $avatar, Input::get('type'), $user['email'], Input::get('email_edu'), Input::get('department'));    
        });
        
        $user = Facebook::object('/me')->get();
        $data = Users::getUser($user['id']);
        Session::put('user',$data);

        return Redirect::to('/');
    }   
}