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
        try {
            $token = Facebook::getTokenFromRedirect(url('/login/callback'));

            Facebook::setAccessToken($token);
            Session::put('fb_token', $token);

            $fb_user = Facebook::object('/me')->get();
            $fb_id = $fb_user['id'];
        } catch(Exception $e) {
            return Redirect::to('/');
        }

        $user = Users::find($fb_id)
        if ($user !== null){
            $status = UsersDetail::getUserStatus($user->id);
            Session::put('user', $user);
            Session::put('user_status', $status);
            return Redirect::to('/');
        } else {
            return Redirect::to('register');

        }

    }
}
