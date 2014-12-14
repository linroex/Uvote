<?php
class LoginController extends Controller{
    public function Login(){
        if(!Session::has('fb_token')){
            return Redirect::to(Facebook::getLoginUrl(['public_profile','email'],url('/login/callback')));
        }else{
            return Redirect::to('/');
        }
    }
    public function Login_callback(){
        try{
            $token = Facebook::getTokenFromRedirect(url('/login/callback'));

            Facebook::setAccessToken($token);
            Session::put('fb_token',$token);

            $user = Facebook::object('/me')->get();    
        }catch(Exception $e){
            return Redirect::to('/');
        }
        
        if(Users::existsUser($user['id'])){
            $data = Users::getUser($user['id']);
            Session::put('user',$data);
        }else{
            $uid = Users::createUser($user['name'],$user['id']);
            $avatar = Facebook::object('/me/picture?redirect=false')->get()['url'];
            $email = $user['id'] . '@facebook.com';
            // 記得修改
            UsersDetail::createUserData($uid, $avatar, 'student', $email, $email, '不分系');    
        }
        
        return Redirect::to('/');
    }
}