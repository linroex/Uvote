<?php
class LoginController extends Controller{
    public function showRegisterPage(){
        return View::make('verify_email');
    }

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
            $status = UsersDetail::getUserStatus($data->id);
            Session::put('user',$data);
            Session::put('user_status',$status);
            return Redirect::to('/');
        }else{
            return Redirect::to('register');
            
        }
        
    }
}